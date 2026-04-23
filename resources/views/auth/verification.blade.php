<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>VitaCare – Verifikasi</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet"/>
<style>
:root {
  --white:    #FFFFFF;
  --cream:    #FAF7F4;
  --brown-lt: #C8A882;
  --brown-md: #A0784A;
  --brown-dk: #3E2209;
  --red:      #C0392B;
  --red-lt:   #E74C3C;
  --black:    #0D0D0D;
  --muted:    #9A8070;
  --input-bg: #F5F0EB;
  --border:   #E2D9CF;
  --success:  #27AE60;
}
*{margin:0;padding:0;box-sizing:border-box;}
body{
  font-family:'Jost',sans-serif;
  background:var(--cream);
  min-height:100vh;
  display:flex;flex-direction:column;
  align-items:center;padding:40px 20px;
}

/* TOP NAV */
.top-nav{
  width:100%;max-width:1100px;
  display:flex;justify-content:space-between;align-items:center;
  margin-bottom:40px;
}
.brand-logo{display:flex;align-items:center;gap:10px;}
.brand-icon{
  width:38px;height:38px;
  background:var(--brown-dk);border-radius:10px;
  display:flex;align-items:center;justify-content:center;
  font-size:18px;color:white;
}
.brand-name{
  font-family:'Cormorant Garamond',serif;
  font-size:24px;font-weight:700;
  color:var(--brown-dk);letter-spacing:1px;
}
.back-btn{
  display:flex;align-items:center;gap:6px;
  font-size:13px;color:var(--muted);text-decoration:none;
  transition:color .2s;
}
.back-btn:hover{color:var(--brown-dk);}

/* PAGE TITLE */
.page-header{text-align:center;margin-bottom:48px;}
.page-eye{font-size:11px;letter-spacing:3px;text-transform:uppercase;color:var(--brown-md);font-weight:600;margin-bottom:8px;}
.page-title{
  font-family:'Cormorant Garamond',serif;
  font-size:42px;font-weight:700;
  color:var(--brown-dk);
  margin-bottom:12px;
}
.page-sub{font-size:14px;color:var(--muted);max-width:480px;margin:0 auto;line-height:1.7;}
.accent-bar{width:48px;height:3px;background:linear-gradient(90deg,var(--red),var(--brown-lt));border-radius:2px;margin:16px auto 0;}

/* TAB SWITCHER */
.tab-row{
  display:flex;
  background:var(--white);
  border:1px solid var(--border);
  border-radius:16px;
  padding:6px;
  gap:4px;
  margin-bottom:36px;
  width:100%;max-width:600px;
}
.tab-btn{
  flex:1;height:42px;
  background:transparent;border:none;
  border-radius:12px;
  font-family:'Jost',sans-serif;
  font-size:13px;font-weight:500;
  color:var(--muted);cursor:pointer;
  transition:all .25s;
}
.tab-btn.active{
  background:var(--brown-dk);color:var(--white);
  box-shadow:0 4px 12px rgba(62,34,9,0.2);
}

/* CARDS GRID */
.cards-area{width:100%;max-width:1100px;}
.card-single{max-width:520px;margin:0 auto;}

/* CARD */
.card{
  background:var(--white);
  border-radius:24px;
  padding:44px 48px;
  box-shadow:0 20px 60px rgba(62,34,9,0.08);
  border:1px solid var(--border);
  animation:fadeIn .35s ease both;
}
@keyframes fadeIn{from{opacity:0;transform:translateY(12px);}to{opacity:1;transform:translateY(0);}}

.card-icon{
  width:64px;height:64px;
  border-radius:18px;
  background:var(--input-bg);
  display:flex;align-items:center;justify-content:center;
  font-size:28px;
  margin-bottom:20px;
  border:1px solid var(--border);
}
.card-title{
  font-family:'Cormorant Garamond',serif;
  font-size:28px;font-weight:700;
  color:var(--brown-dk);margin-bottom:6px;
}
.card-sub{font-size:13px;color:var(--muted);line-height:1.7;margin-bottom:28px;}
.card-sub strong{color:var(--brown-dk);}

/* OTP boxes */
.otp-label{font-size:11px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:var(--brown-dk);margin-bottom:12px;}
.otp-row{display:flex;gap:10px;margin-bottom:10px;}
.otp-box{
  flex:1;height:60px;
  background:var(--input-bg);
  border:2px solid var(--border);
  border-radius:14px;
  text-align:center;
  font-family:'Cormorant Garamond',serif;
  font-size:28px;font-weight:700;
  color:var(--brown-dk);
  outline:none;
  transition:border-color .2s,background .2s,transform .1s;
  max-width:56px;
}
.otp-box:focus{
  border-color:var(--brown-md);
  background:var(--white);
  transform:scale(1.05);
}
.otp-box.filled{
  border-color:var(--brown-lt);
  background:var(--white);
}

.otp-timer{
  font-size:12px;color:var(--muted);
  margin-bottom:24px;
}
.otp-timer span{color:var(--red);font-weight:600;}
.resend-link{color:var(--brown-md);font-weight:600;cursor:pointer;text-decoration:none;}
.resend-link:hover{color:var(--red);}

/* field */
.field{margin-bottom:18px;}
.field label{
  font-size:11px;font-weight:600;
  color:var(--brown-dk);letter-spacing:1px;text-transform:uppercase;
  display:block;margin-bottom:7px;
}
.field-wrap{position:relative;}
.field-wrap input{
  width:100%;height:50px;
  background:var(--input-bg);
  border:1.5px solid transparent;
  border-radius:12px;
  padding:0 44px 0 16px;
  font-family:'Jost',sans-serif;
  font-size:14px;color:var(--brown-dk);
  outline:none;transition:border-color .2s,background .2s;
}
.field-wrap input:focus{border-color:var(--brown-md);background:var(--white);}
.field-wrap input::placeholder{color:var(--muted);}
.field-icon{
  position:absolute;right:14px;top:50%;transform:translateY(-50%);
  color:var(--muted);font-size:15px;
}

/* info */
.info-box{
  background:linear-gradient(135deg,rgba(200,168,130,0.12),rgba(62,34,9,0.05));
  border:1px solid var(--border);border-radius:14px;
  padding:14px 16px;display:flex;gap:10px;margin-bottom:24px;
}
.info-text{font-size:12px;color:var(--muted);line-height:1.7;}
.info-text strong{color:var(--brown-dk);}

/* btn */
.btn-main{
  width:100%;height:52px;
  background:var(--brown-dk);color:var(--white);
  border:none;border-radius:14px;
  font-family:'Jost',sans-serif;
  font-size:15px;font-weight:600;letter-spacing:1px;
  cursor:pointer;
  transition:transform .15s,box-shadow .2s;
  box-shadow:0 10px 30px rgba(62,34,9,0.25);
  margin-bottom:14px;
}
.btn-main:hover{transform:translateY(-2px);box-shadow:0 16px 40px rgba(62,34,9,0.35);}
.btn-main.red{background:var(--red);box-shadow:0 10px 30px rgba(192,57,43,0.3);}
.btn-outline{
  width:100%;height:48px;
  background:transparent;
  border:2px solid var(--border);
  border-radius:14px;
  font-family:'Jost',sans-serif;
  font-size:14px;font-weight:600;color:var(--muted);
  cursor:pointer;transition:all .2s;
}
.btn-outline:hover{border-color:var(--brown-lt);color:var(--brown-dk);}

/* ACCOUNT SWITCHER SECTION */
.accounts-grid{
  display:grid;grid-template-columns:1fr 1fr;
  gap:16px;margin-bottom:20px;
}
.account-card{
  background:var(--input-bg);
  border:2px solid var(--border);
  border-radius:16px;padding:16px;
  cursor:pointer;transition:all .25s;
  display:flex;align-items:center;gap:12px;
}
.account-card:hover,.account-card.selected{
  border-color:var(--brown-md);
  background:var(--white);
  box-shadow:0 6px 20px rgba(62,34,9,0.1);
}
.acc-avatar{
  width:44px;height:44px;
  border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  font-size:18px;flex-shrink:0;
  font-weight:700;color:white;
}
.acc-info{flex:1;min-width:0;}
.acc-name{font-size:13px;font-weight:600;color:var(--brown-dk);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.acc-email{font-size:11px;color:var(--muted);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.acc-badge{
  font-size:9px;font-weight:600;letter-spacing:0.5px;text-transform:uppercase;
  padding:2px 7px;border-radius:20px;
  background:rgba(39,174,96,0.12);color:var(--success);
  margin-top:3px;display:inline-block;
}
.acc-badge.inactive{background:rgba(160,120,74,0.12);color:var(--brown-md);}
.check-icon{
  width:20px;height:20px;border-radius:50%;
  background:transparent;border:2px solid var(--border);
  display:flex;align-items:center;justify-content:center;
  font-size:10px;color:transparent;
  transition:all .25s;flex-shrink:0;
}
.account-card.selected .check-icon{
  background:var(--brown-dk);border-color:var(--brown-dk);color:white;
}

.add-account{
  border:2px dashed var(--border);
  border-radius:16px;padding:16px;
  display:flex;align-items:center;justify-content:center;gap:10px;
  cursor:pointer;transition:all .2s;
  font-size:13px;color:var(--muted);font-weight:500;
  margin-bottom:20px;
}
.add-account:hover{border-color:var(--brown-lt);color:var(--brown-md);}

/* SUCCESS screen */
.success-wrap{text-align:center;padding:20px 0;}
.success-icon{
  width:80px;height:80px;
  background:linear-gradient(135deg,#27AE60,#2ECC71);
  border-radius:50%;display:flex;align-items:center;justify-content:center;
  font-size:36px;color:white;
  margin:0 auto 24px;
  box-shadow:0 12px 30px rgba(39,174,96,0.3);
  animation:pop .4s cubic-bezier(.22,1,.36,1) both;
}
@keyframes pop{from{transform:scale(0);opacity:0;}to{transform:scale(1);opacity:1;}}

/* pw strength */
.pw-bar{height:3px;border-radius:2px;background:var(--border);margin-top:8px;overflow:hidden;}
.pw-fill{height:100%;width:0%;border-radius:2px;background:var(--red);transition:width .4s,background .4s;}
.pw-label{font-size:11px;color:var(--muted);margin-top:4px;}

/* panel hidden */
.panel{display:none;}
.panel.active{display:block;}

@media(max-width:600px){
  .card{padding:32px 24px;}
  .accounts-grid{grid-template-columns:1fr;}
  .otp-box{height:50px;font-size:22px;}
}
</style>
</head>
<body>

<!-- TOP NAV -->
<div class="top-nav">
  <div class="brand-logo">
    <div class="brand-icon">✚</div>
    <div class="brand-name">VitaCare</div>
  </div>
  <a href="../login/index.html" class="back-btn">← Kembali ke Login</a>
</div>

<!-- PAGE HEADER -->
<div class="page-header">
  <div class="page-eye">Keamanan Akun</div>
  <div class="page-title">Verifikasi & Akses</div>
  <div class="page-sub">Pilih metode verifikasi atau kelola akun yang terhubung dengan profil VitaCare Anda</div>
  <div class="accent-bar"></div>
</div>

<!-- TAB SWITCHER -->
<div class="tab-row">
  <button class="tab-btn active" onclick="switchTab(0,this)">📧 Verifikasi Email</button>
  <button class="tab-btn" onclick="switchTab(1,this)">🔑 Reset Password</button>
  <button class="tab-btn" onclick="switchTab(2,this)">👥 Akun Lain</button>
</div>

<!-- ─────────────────────────────────────────── -->
<!-- PANEL 0: EMAIL VERIFICATION OTP -->
<!-- ─────────────────────────────────────────── -->
<div class="cards-area">
<div class="panel active card-single" id="panel0">
  <div class="card">
    <div class="card-icon">✉️</div>
    <div class="card-title">Verifikasi Email</div>
    <div class="card-sub">Kami telah mengirimkan kode OTP ke <strong>ay***5@gmail.com</strong>. Masukkan kode 6-digit di bawah ini.</div>

    <div class="otp-label">Masukkan Kode OTP</div>
    <div class="otp-row">
      <input type="text" class="otp-box filled" maxlength="1" value="3" id="o1"/>
      <input type="text" class="otp-box filled" maxlength="1" value="7" id="o2"/>
      <input type="text" class="otp-box filled" maxlength="1" value="4" id="o3"/>
      <input type="text" class="otp-box" maxlength="1" id="o4"/>
      <input type="text" class="otp-box" maxlength="1" id="o5"/>
      <input type="text" class="otp-box" maxlength="1" id="o6"/>
    </div>
    <div class="otp-timer">
      Kode berlaku selama <span id="timer">04:52</span> &nbsp;·&nbsp;
      <a class="resend-link" onclick="resendCode()">Kirim ulang kode</a>
    </div>

    <div class="info-box">
      <span style="font-size:18px;">💡</span>
      <div class="info-text">Tidak menemukan email? Cek folder <strong>Spam</strong> atau <strong>Promosi</strong> Anda. Pastikan email <strong>noreply@vitacare.id</strong> tidak diblokir.</div>
    </div>

    <button class="btn-main" onclick="showSuccess()">VERIFIKASI SEKARANG ✓</button>
    <button class="btn-outline" onclick="switchTab(2, document.querySelectorAll('.tab-btn')[2])">Gunakan Akun Lain</button>

    <!-- SUCCESS STATE -->
    <div class="success-wrap" id="success-state" style="display:none;">
      <div class="success-icon">✓</div>
      <div class="card-title" style="font-size:32px;">Email Terverifikasi!</div>
      <div style="font-size:13px;color:var(--muted);line-height:1.8;max-width:320px;margin:12px auto 28px;">Akun VitaCare Anda kini aktif dan siap digunakan. Selamat menjaga kesehatan!</div>
      <a href="../login/index.html" style="text-decoration:none;">
        <button class="btn-main" style="max-width:280px;margin:0 auto;">Masuk ke Dashboard →</button>
      </a>
    </div>
  </div>
</div>

<!-- ─────────────────────────────────────────── -->
<!-- PANEL 1: RESET PASSWORD -->
<!-- ─────────────────────────────────────────── -->
<div class="panel card-single" id="panel1">
  <div class="card" id="rp-step1">
    <div class="card-icon">🔑</div>
    <div class="card-title">Reset Password</div>
    <div class="card-sub">Masukkan email yang terdaftar. Kami akan mengirimkan link reset password yang berlaku 15 menit.</div>

    <div class="field">
      <label>Alamat Email</label>
      <div class="field-wrap">
        <input type="email" placeholder="nama@email.com"/>
        <span class="field-icon">✉</span>
      </div>
    </div>

    <div class="info-box">
      <span style="font-size:18px;">🔒</span>
      <div class="info-text">Demi keamanan, link hanya berlaku <strong>15 menit</strong> dan dapat digunakan <strong>satu kali</strong> saja.</div>
    </div>

    <button class="btn-main red" onclick="showRpStep2()">KIRIM LINK RESET →</button>
    <button class="btn-outline" onclick="switchTab(0, document.querySelectorAll('.tab-btn')[0])">← Kembali</button>
  </div>

  <div class="card" id="rp-step2" style="display:none;">
    <div class="card-icon">📬</div>
    <div class="card-title">Link Terkirim!</div>
    <div class="card-sub">Email reset password dikirim ke <strong>ay***5@gmail.com</strong>. Buka email dan klik link yang kami kirimkan.</div>

    <div style="background:var(--input-bg);border-radius:14px;padding:20px;margin-bottom:24px;text-align:center;">
      <div style="font-size:48px;margin-bottom:10px;">📧</div>
      <div style="font-size:13px;color:var(--muted);line-height:1.7;">Tidak terima email?<br/>Cek folder spam atau <a class="resend-link" onclick="showRpStep1()">kirim ulang</a></div>
    </div>

    <!-- New Password Form -->
    <div class="card-sub" style="margin-top:4px;">Sudah punya kode? Atur password baru:</div>
    <div class="field">
      <label>Password Baru</label>
      <div class="field-wrap">
        <input type="password" placeholder="min. 8 karakter" oninput="checkPw2(this.value)"/>
        <span class="field-icon">👁</span>
      </div>
      <div class="pw-bar"><div class="pw-fill" id="pw-fill2"></div></div>
      <div class="pw-label" id="pw-label2">Masukkan password baru</div>
    </div>
    <div class="field">
      <label>Konfirmasi Password</label>
      <div class="field-wrap">
        <input type="password" placeholder="Ulangi password baru"/>
        <span class="field-icon">👁</span>
      </div>
    </div>
    <button class="btn-main red">SIMPAN PASSWORD BARU ✓</button>
  </div>
</div>

<!-- ─────────────────────────────────────────── -->
<!-- PANEL 2: SWITCH / ADD ACCOUNT -->
<!-- ─────────────────────────────────────────── -->
<div class="panel" id="panel2" style="width:100%;max-width:680px;margin:0 auto;">
  <div class="card">
    <div class="card-icon">👥</div>
    <div class="card-title">Kelola Akun</div>
    <div class="card-sub">Pilih akun yang ingin Anda gunakan, atau tambahkan akun baru ke perangkat ini.</div>

    <div class="accounts-grid">
      <div class="account-card selected" onclick="selectAccount(this)">
        <div class="acc-avatar" style="background:linear-gradient(135deg,#3E2209,#A0784A);">AN</div>
        <div class="acc-info">
          <div class="acc-name">Andi Nugraha</div>
          <div class="acc-email">andi.n@gmail.com</div>
          <div class="acc-badge">Aktif</div>
        </div>
        <div class="check-icon">✓</div>
      </div>
      <div class="account-card" onclick="selectAccount(this)">
        <div class="acc-avatar" style="background:linear-gradient(135deg,#C0392B,#E74C3C);">SR</div>
        <div class="acc-info">
          <div class="acc-name">Siti Rahayu</div>
          <div class="acc-email">siti.r@yahoo.com</div>
          <div class="acc-badge inactive">Tidak Aktif</div>
        </div>
        <div class="check-icon">✓</div>
      </div>
      <div class="account-card" onclick="selectAccount(this)">
        <div class="acc-avatar" style="background:linear-gradient(135deg,#1A5276,#2E86C1);">BP</div>
        <div class="acc-info">
          <div class="acc-name">Budi Pratama</div>
          <div class="acc-email">budi.p@hotmail.com</div>
          <div class="acc-badge inactive">Tidak Aktif</div>
        </div>
        <div class="check-icon">✓</div>
      </div>
      <div class="account-card" onclick="selectAccount(this)">
        <div class="acc-avatar" style="background:linear-gradient(135deg,#145A32,#27AE60);">NL</div>
        <div class="acc-info">
          <div class="acc-name">Nila Lestari</div>
          <div class="acc-email">nila.les@gmail.com</div>
          <div class="acc-badge inactive">Tidak Aktif</div>
        </div>
        <div class="check-icon">✓</div>
      </div>
    </div>

    <div class="add-account" onclick="window.location='../register/index.html'">
      <span style="font-size:20px;">＋</span>
      <span>Tambah Akun Baru</span>
    </div>

    <div style="border-top:1px solid var(--border);padding-top:20px;margin-bottom:20px;">
      <div style="font-size:11px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:var(--brown-dk);margin-bottom:14px;">
        Login dengan Akun Sosial
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px;">
        <button class="btn-outline" style="height:44px;display:flex;align-items:center;justify-content:center;gap:6px;font-size:12px;">
          <svg width="14" height="14" viewBox="0 0 48 48"><path fill="#4285F4" d="M44.5 20H24v8h11.8C34.7 33.1 30 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.9 1.1 8 3l5.7-5.7C34.5 6.5 29.5 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20c11 0 20-8 20-20 0-1.3-.2-2.7-.5-4z"/></svg>
          Google
        </button>
        <button class="btn-outline" style="height:44px;display:flex;align-items:center;justify-content:center;gap:6px;font-size:12px;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="#1877F2"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          Facebook
        </button>
        <button class="btn-outline" style="height:44px;display:flex;align-items:center;justify-content:center;gap:6px;font-size:12px;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="#0A66C2"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2" fill="#0A66C2"/></svg>
          LinkedIn
        </button>
      </div>
    </div>

    <button class="btn-main" onclick="switchToSelected()">MASUK DENGAN AKUN INI →</button>
    <button class="btn-outline" style="margin-top:10px;" onclick="confirmSignout()">🚪 Keluar dari Semua Akun</button>
  </div>
</div>

</div><!-- /cards-area -->

<script>
// TAB SWITCH
function switchTab(idx, btn) {
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.querySelectorAll('.panel').forEach(p => p.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById('panel'+idx).classList.add('active');
}

// OTP auto-advance
const otpBoxes = document.querySelectorAll('.otp-box');
otpBoxes.forEach((box, i) => {
  box.addEventListener('input', () => {
    if(box.value.length === 1) {
      box.classList.add('filled');
      if(i < otpBoxes.length - 1) otpBoxes[i+1].focus();
    } else {
      box.classList.remove('filled');
    }
  });
  box.addEventListener('keydown', e => {
    if(e.key==='Backspace' && !box.value && i > 0) otpBoxes[i-1].focus();
  });
});

// TIMER
let seconds = 4*60+52;
function updateTimer() {
  const m = String(Math.floor(seconds/60)).padStart(2,'0');
  const s = String(seconds%60).padStart(2,'0');
  const el = document.getElementById('timer');
  if(el) el.textContent = m+':'+s;
  if(seconds > 0) { seconds--; setTimeout(updateTimer, 1000); }
  else if(el) { el.textContent = 'Kedaluwarsa'; el.style.color='var(--red)'; }
}
updateTimer();

function resendCode() {
  seconds = 4*60+52;
  const el = document.getElementById('timer');
  if(el) { el.style.color='var(--red)'; }
  alert('Kode OTP baru telah dikirim!');
}

// SUCCESS
function showSuccess() {
  const verif = document.querySelector('#panel0 .card > *:not(#success-state)');
  document.querySelectorAll('#panel0 .card > *').forEach(el => {
    if(el.id !== 'success-state') el.style.display = 'none';
  });
  document.getElementById('success-state').style.display = 'block';
}

// RESET PW
function showRpStep2() {
  document.getElementById('rp-step1').style.display = 'none';
  document.getElementById('rp-step2').style.display = 'block';
}
function showRpStep1() {
  document.getElementById('rp-step1').style.display = 'block';
  document.getElementById('rp-step2').style.display = 'none';
}

// PW STRENGTH
function checkPw2(val) {
  const fill = document.getElementById('pw-fill2');
  const label = document.getElementById('pw-label2');
  let s = 0;
  if(val.length >= 8) s++;
  if(/[A-Z]/.test(val)) s++;
  if(/[0-9]/.test(val)) s++;
  if(/[^A-Za-z0-9]/.test(val)) s++;
  const map = [
    {w:'0%',c:'#E8E4DF',t:'Masukkan password baru'},
    {w:'25%',c:'#C0392B',t:'Lemah'},
    {w:'50%',c:'#E67E22',t:'Cukup'},
    {w:'75%',c:'#F1C40F',t:'Kuat'},
    {w:'100%',c:'#27AE60',t:'Sangat Kuat'},
  ];
  const idx = val.length===0 ? 0 : Math.max(1,s);
  fill.style.width = map[idx].w;
  fill.style.background = map[idx].c;
  label.textContent = map[idx].t;
  label.style.color = map[idx].c;
}

// ACCOUNT SELECT
function selectAccount(card) {
  document.querySelectorAll('.account-card').forEach(c => c.classList.remove('selected'));
  card.classList.add('selected');
}
function switchToSelected() {
  const sel = document.querySelector('.account-card.selected .acc-name');
  if(sel) alert('Berpindah ke akun: ' + sel.textContent);
}
function confirmSignout() {
  if(confirm('Yakin ingin keluar dari semua akun?')) {
    window.location = '../login/index.html';
  }
}
</script>
</body>
</html>