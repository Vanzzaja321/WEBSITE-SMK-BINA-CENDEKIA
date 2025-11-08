<?php
session_start();

// ✅ Ambil status kunci dan percobaan login
$locked_until = isset($_SESSION['locked_until']) ? (int)$_SESSION['locked_until'] : 0;
$now = time();

// ✅ Jika waktu kunci sudah lewat, reset percobaan & buka kunci
if ($locked_until > 0 && $locked_until <= $now) {
    unset($_SESSION['locked_until']);
    unset($_SESSION['login_attempts']);
    $locked_until = 0;
}

$is_locked = ($locked_until > $now);
$remaining = $is_locked ? ($locked_until - $now) : 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>SMK Bina Cendekia Cirebon</title>
<link rel="icon" type="image/png" href="images/LOGOBERSIH.png">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
  * { margin:0; padding:0; box-sizing:border-box; }

  body {
    min-height:100vh;
    font-family:'Poppins',sans-serif;
    display:flex;
    align-items:center;
    justify-content:center;
    background: radial-gradient(circle at top left, #0a0f2b, #040716 70%);
    color:#fff;
    overflow:hidden;
    position:relative;
  }

  /* blur saat terkunci */
  body.blurred .bg-logo,
  body.blurred .login-card,
  body.blurred .back-btn,
  body.blurred .particle {
    filter: blur(6px) saturate(.9);
    pointer-events: none;
    user-select: none;
  }

  /* ===== Background Logo ===== */
  .bg-logo {
    position:absolute;
    inset:0;
    display:flex;
    align-items:center;
    justify-content:center;
    z-index:1;
    opacity:0.25;
    filter:blur(5px);
  }
  .bg-logo img {
    width:750px;
    height:auto;
    opacity:0.5;
    transform:scale(1.05);
  }

  /* ===== Partikel ===== */
  .particle {
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.2);
    pointer-events:none;
    animation:float linear forwards;
    z-index:2;
  }
  @keyframes float {
    from { transform:translateY(0); opacity:0.8; }
    to { transform:translateY(-110vh); opacity:0; }
  }

  /* ===== Login Card ===== */
  .login-card {
    position:relative;
    z-index:5;
    width:460px;
    padding:55px 50px 70px;
    background:rgba(25,30,60,0.55);
    border:1px solid rgba(255,255,255,0.08);
    border-radius:25px;
    box-shadow:0 0 25px rgba(0,100,255,0.25);
    backdrop-filter:blur(15px);
    text-align:center;
    animation:fadeIn 1.2s ease forwards;
  }
  @keyframes fadeIn {
    from { transform:translateY(30px); opacity:0; }
    to { transform:translateY(0); opacity:1; }
  }

  .login-card h2 { font-size:28px; margin-bottom:10px; font-weight:600; color:#fff; }
  .login-card p { font-size:14px; margin-bottom:35px; color:#d0d0e0; }

  .input-group { margin-bottom:20px; text-align:left; }
  .input-group label {
    display:block;
    font-size:13px;
    margin-bottom:6px;
    color:#bfc8e0;
  }
  .input-group input {
    width:100%;
    padding:14px 16px;
    border:none;
    border-radius:12px;
    font-size:15px;
    color:#fff;
    background:rgba(255,255,255,0.08);
    outline:none;
    transition:background .3s,border .3s;
  }
  .input-group input:focus {
    background:rgba(255,255,255,0.15);
    box-shadow:0 0 10px rgba(0,120,255,0.3);
  }

  .btn-login {
    margin-top:15px;
    width:100%;
    padding:14px 16px;
    border:none;
    border-radius:12px;
    font-weight:600;
    font-size:16px;
    color:white;
    background:linear-gradient(90deg,#2575fc,#6a11cb);
    cursor:pointer;
    box-shadow:0 10px 35px rgba(37,117,252,0.25);
    transition:transform .2s, box-shadow .2s;
  }
  .btn-login:hover {
    transform:translateY(-2px);
    box-shadow:0 15px 40px rgba(106,17,203,0.35);
  }

  .helper { margin-top:20px; font-size:13px; color:#c5c9e0; }

  .error {
    background:rgba(255,50,50,0.08);
    border:1px solid rgba(255,50,50,0.15);
    color:#ffaaaa;
    font-size:13px;
    padding:8px;
    border-radius:8px;
    margin-bottom:14px;
  }

  /* === Overlay Loading === */
  .progress-overlay {
    position:fixed; inset:0;
    background:rgba(5,10,25,0.9);
    z-index:999;
    display:none;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    backdrop-filter:blur(8px);
    transition:opacity .3s ease;
  }
  .progress-box {
    text-align:center;
    background:rgba(255,255,255,0.06);
    padding:30px 40px;
    border-radius:18px;
    border:1px solid rgba(255,255,255,0.1);
    box-shadow:0 0 25px rgba(0,0,0,0.4);
  }
  .progress-bar {
    width:330px; height:8px;
    background:rgba(255,255,255,0.15);
    border-radius:10px;
    overflow:hidden;
    margin-top:20px;
  }
  .progress-fill {
    width:0%; height:100%;
    background:linear-gradient(90deg,#2575fc,#6a11cb,#2575fc);
    background-size:300% 100%;
    animation:shimmer 2s infinite linear, fillup 9.9s ease forwards;
  }
  @keyframes shimmer { from{background-position:0% 50%;} to{background-position:100% 50%;} }
  @keyframes fillup { from{width:0%;} to{width:100%;} }

  .progress-text { font-size:15px; color:#e8ecff; margin-top:12px; opacity:0.9; letter-spacing:.5px; }

  /* Tombol kembali */
  .back-btn {
    position:absolute; top:24px; left:24px;
    z-index:10; display:inline-flex; align-items:center; gap:8px;
    padding:8px 14px; border-radius:10px;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.1);
    color:#fff; text-decoration:none; font-size:13px;
    transition:all .25s ease; backdrop-filter:blur(6px);
  }
  .back-btn:hover {
    background:rgba(255,255,255,0.12);
    transform:translateX(-3px);
    box-shadow:0 6px 25px rgba(37,117,252,0.35);
  }

  /* === Popup Lock === */
  .lock-overlay {
    position:fixed; inset:0; z-index:1000;
    display:none; align-items:center; justify-content:center;
    background:rgba(0,0,0,0.45); backdrop-filter:blur(4px);
  }
  .lock-box {
    width:360px;
    background:rgba(12,14,35,0.9);
    border-radius:14px;
    padding:22px;
    text-align:center;
    border:1px solid rgba(255,255,255,0.06);
    box-shadow:0 10px 40px rgba(0,0,0,0.6);
    color:#fff;
  }
  .lock-box h3 { margin-bottom:8px; font-size:20px; }
  .lock-box p { margin-bottom:14px; color:#cbd2ff; font-size:14px; }
  .countdown { font-weight:700; font-size:22px; letter-spacing:1px; }
</style>
</head>
<body <?php if ($is_locked) echo 'class="blurred"'; ?>>

<div class="bg-logo">
  <img src="images/lOGOBERSIH.png" alt="Logo Sekolah">
</div>

<a href="SMKWEB.php" class="back-btn"><i class="fa-solid fa-arrow-left"></i> Kembali ke Halaman Utama</a>

<div class="login-card">
  <h2>Masuk Sistem</h2>
  <p>Silakan masukkan username & password Anda</p>

  <?php if (isset($_SESSION['error'])): ?>
    <div class="error"><?= htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?></div>
  <?php endif; ?>

  <form id="loginForm" action="proses_login.php" method="post" autocomplete="off">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" required <?= $is_locked ? 'disabled' : ''; ?>>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" required <?= $is_locked ? 'disabled' : ''; ?>>
    </div>
    <button type="submit" class="btn-login" <?= $is_locked ? 'disabled' : ''; ?>>Masuk</button>
    <div class="helper">SMK Bina Cendekia System</div>
  </form>
</div>

<!-- Overlay Loading -->
<div class="progress-overlay" id="progressOverlay">
  <div class="progress-box">
    <div class="progress-bar"><div class="progress-fill"></div></div>
    <div class="progress-text" id="progressText">Memproses login...</div>
  </div>
</div>

<!-- Popup Lock -->
<div class="lock-overlay" id="lockOverlay" <?= $is_locked ? 'style="display:flex;"' : ''; ?>>
  <div class="lock-box">
    <h3>Akun Terkunci Sementara</h3>
    <p>Anda telah melakukan lebih dari 3 percobaan login yang gagal. Coba lagi setelah:</p>
    <div class="countdown" id="countdown"><?= $remaining; ?> detik</div>
    <p style="margin-top:10px;font-size:13px;color:#c7d0ff">Silakan tunggu sebentar atau hubungi admin jika perlu bantuan.</p>
  </div>
</div>

<script>
/* Efek partikel */
function createParticle(){
  const p=document.createElement('div');
  const s=Math.random()*5+2;
  p.classList.add('particle');
  p.style.width=`${s}px`;
  p.style.height=`${s}px`;
  p.style.left=`${Math.random()*window.innerWidth}px`;
  p.style.top=`${Math.random()*window.innerHeight}px`;
  p.style.background=`rgba(255,255,255,${Math.random()*0.25+0.05})`;
  const dur=Math.random()*8+6;
  p.style.animationDuration=`${dur}s`;
  document.body.appendChild(p);
  setTimeout(()=>p.remove(),dur*1000);
}
setInterval(createParticle,300);

/* Loading animasi login */
const form = document.getElementById('loginForm');
const overlay = document.getElementById('progressOverlay');
const text = document.getElementById('progressText');

if(form){
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (form.querySelector('button').disabled) return;

    overlay.style.display = 'flex';
    overlay.style.opacity = '1';

    setTimeout(() => text.textContent = 'Memverifikasi akun dengan AI...', 1000);
    setTimeout(() => text.textContent = 'Mengamankan koneksi server...', 2500);
    setTimeout(() => text.textContent = 'Mengecek data login...', 4500);
    setTimeout(() => text.textContent = 'Memvalidasi sistem keamanan...', 5500);
    setTimeout(() => text.textContent = 'Aktifkan proteksi lanjutan...', 7000);
    setTimeout(() => text.textContent = 'AI mendeteksi username & password...', 8000);

    setTimeout(() => form.submit(), 9500);
  });
}

/* Countdown untuk popup lock */
<?php if ($is_locked): ?>
(function(){
  let remaining = <?= (int)$remaining; ?>;
  const countdownEl = document.getElementById('countdown');
  const lockOverlay = document.getElementById('lockOverlay');

  function tick(){
    if (remaining <= 0) {
      // otomatis hilangkan blur & overlay lalu reload halaman
      if (lockOverlay) lockOverlay.style.display = 'none';
      document.body.classList.remove('blurred');
      location.reload();
      return;
    }
    countdownEl.textContent = remaining + ' detik';
    remaining--;
    setTimeout(tick, 1000);
  }
  tick();
})();
<?php endif; ?>
</script>

</body>
</html>
