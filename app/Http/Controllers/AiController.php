<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AiController extends Controller
{
    public function ask(Request $request)
    {
        // 1. Validasi input agar tidak kosong
        $request->validate([
            'prompt' => 'required|string|max:2000',
        ]);

        $prompt = $request->input('prompt');
        $apiKey = env('GEMINI_API_KEY');

        // 2. Definisi URL API (Menggunakan v1beta agar stabil untuk model flash)
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . $apiKey;

        try {
            // 3. Kirim request ke Google Gemini
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($url, [
                'contents' => [
                    ['parts' => [['text' => $prompt]]]
                ]
            ]);

            // 4. Cek apakah respon sukses
            if ($response->successful()) {
                $data = $response->json();
                
                // Ambil teks jawaban dari struktur JSON Gemini
                $answer = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Tidak ada teks yang dihasilkan.';
                
                return response()->json(['answer' => $answer]);
            }

            // 5. Jika error dari sisi Google
            return response()->json([
                'answer' => 'Error API Gemini: ' . $response->body()
            ], $response->status());

        } catch (\Exception $e) {
            // 6. Jika error dari sisi server kita
            return response()->json(['answer' => 'System Error: ' . $e->getMessage()], 500);
        }
    }
}