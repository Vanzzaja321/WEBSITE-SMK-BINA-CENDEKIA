<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$level = $_SESSION['level'];

include "page/header.php";
include "page/navbar.php";
include "page/sidebar.php";
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="particles"></div>
<div class="wrapper">

  <?php 
  if (isset($_SESSION['play_sound']) && $_SESSION['play_sound'] === true) {
      $sound = ($level === 'admin') ? 'sound_admin.mp3' : 'sound_operator.mp3';
      echo '<audio autoplay><source src="images/'.$sound.'" type="audio/mpeg"></audio>';
      unset($_SESSION['play_sound']);
  }
  ?>

  <div class="content-wrapper" style="background: transparent; color: #fff;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-6">
            <h1 style="font-weight:700;">Dashboard</h1>
          </div>
          <div class="col-sm-6 text-right">
            <small>👋 Selamat datang, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b></small>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">

        <?php if (!isset($_GET['page'])): ?>

        <!-- 🔥 CARD PROFIL -->
        <div class="card" style="border: none; background: rgba(255,255,255,0.05); box-shadow: 0 0 25px rgba(0,255,255,0.2); border-radius: 20px;">
          <div class="card-header" style="background: transparent; border: none;">
            <h3 class="card-title" style="font-weight:600; color:#00ffff;">
              <i class="fas fa-user-cog"></i> Profil Pengguna
            </h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>

          <div class="card-body">

            <!-- 🌈 Salam -->
            <div class="main-greeting">
              <h1>⚙️ Halo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
              <p>
                Anda login sebagai <b><?php echo ucfirst($level); ?></b> — penjaga alur data sekolah.<br>
                Pastikan semua informasi tetap akurat, lengkap, dan terkini. 📊
              </p>
            </div>

            <!-- 💫 Info Box -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; justify-content: center;">

              <div class="info-box">
                <div>
                  <div class="info-title">📅 Tanggal</div>
                  <div class="info-value"><?php echo date("l, d F Y"); ?></div>
                </div>
                <i class="fas fa-calendar-day info-icon"></i>
              </div>

              <!-- ⏰ Waktu -->
              <div class="info-box">
                <div>
                  <div class="info-title">🕒 Waktu</div>
                  <div class="info-value" id="clock"></div>
                </div>
                <div class="clock-container">
                  <div class="clock-center"></div>
                  <div class="hand hour"></div>
                  <div class="hand minute"></div>
                  <div class="hand second"></div>
                </div>
              </div>

              <div class="info-box">
                <div>
                  <div class="info-title">👤 Status Login</div>
                  <div class="info-value"><?php echo ucfirst($level); ?></div>
                </div>
                <i class="fas fa-user-shield info-icon"></i>
              </div>

            </div>

          </div>
        </div>

        <?php 
        else:
          $page = $_GET['page'];
          $file = "page/$page.php";
          if (file_exists($file)) {
              include $file;
          } else {
              echo "<p style='text-align:center; font-size:1.2rem;'>Halaman tidak ditemukan!</p>";
          }
        endif;
        ?>

      </div>
    </section>
  </div>

  <?php include "page/footer.php"; ?>

</div>

<!-- Script dasar -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>

<!-- ✨ STYLE DAN ANIMASI -->
<style>
body {
  background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
  background-size: 400% 400%;
  animation: gradientMove 10s ease infinite;
}
@keyframes gradientMove {
  0% {background-position: 0% 50%;}
  50% {background-position: 100% 50%;}
  100% {background-position: 0% 50%;}
}

/* Partikel */
.particles {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  z-index: 0;
  overflow: hidden;
  pointer-events: none;
}
.particle {
  position: absolute;
  background: rgba(255,255,255,0.15);
  border-radius: 50%;
  animation: float 10s infinite ease-in-out;
}
@keyframes float {
  0% { transform: translateY(0) scale(1); opacity: 1; }
  50% { transform: translateY(-50px) scale(1.3); opacity: 0.8; }
  100% { transform: translateY(0) scale(1); opacity: 1; }
}

/* Teks shimmer */
.main-greeting h1 {
  font-size: 2.8rem;
  font-weight: 800;
  background: linear-gradient(90deg, #00e0ff, #00ff9d, #00b4ff);
  background-size: 300%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: shimmer 4s linear infinite;
}
@keyframes shimmer {
  0% { background-position: 0% 50%; }
  100% { background-position: 100% 50%; }
}
.main-greeting {
  background: rgba(255,255,255,0.08);
  border-radius: 25px;
  box-shadow: 0 0 30px rgba(0,255,255,0.3);
  backdrop-filter: blur(15px);
  padding: 50px;
  margin-bottom: 40px;
  animation: floatUp 3s ease-in-out infinite alternate;
}
@keyframes floatUp {
  from { transform: translateY(0px); }
  to { transform: translateY(-10px); }
}

/* Info Box */
.info-box {
  border-radius: 25px;
  padding: 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  background: rgba(255,255,255,0.08);
  box-shadow: 0 0 25px rgba(0,255,255,0.15);
  backdrop-filter: blur(15px);
  transition: all 0.4s ease;
}
.info-box:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 0 45px rgba(0,255,255,0.5);
}
.info-title { font-weight: 700; font-size: 1.3rem; margin-bottom: 8px; }
.info-value { font-size: 1.2rem; }
.info-icon {
  font-size: 2.8rem;
  animation: pulseGlow 2s infinite alternate;
}
@keyframes pulseGlow {
  from { text-shadow: 0 0 10px rgba(0,255,255,0.5); }
  to { text-shadow: 0 0 25px rgba(0,255,255,0.9); }
}

/* 🕒 JAM ANALOG FUTURISTIK */
.clock-container {
  position: relative;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  background: radial-gradient(circle at center, #0a1a1f, #002b36);
  box-shadow: 0 0 25px rgba(0, 255, 255, 0.3),
              inset 0 0 10px rgba(0, 255, 255, 0.2);
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
  overflow: hidden;
}
.clock-center {
  position: absolute;
  width: 8px;
  height: 8px;
  background: #00ffff;
  border-radius: 50%;
  z-index: 10;
  box-shadow: 0 0 10px #00ffff;
}
.hand {
  position: absolute;
  bottom: 50%;
  transform-origin: bottom center;
  transform: rotate(0deg);
  border-radius: 5px;
}
.hand.hour {
  width: 4px;
  height: 35px;
  background: #00b4ff;
  box-shadow: 0 0 8px #00b4ff;
}
.hand.minute {
  width: 3px;
  height: 50px;
  background: #00ffcc;
  box-shadow: 0 0 8px #00ffcc;
}
.hand.second {
  width: 2px;
  height: 55px;
  background: #ff005e;
  box-shadow: 0 0 12px #ff005e;
}
.number {
  position: absolute;
  color: #00ffff;
  font-size: 0.8rem;
  text-shadow: 0 0 8px #00ffff;
  font-weight: 600;
}
.tick {
  position: absolute;
  width: 2px;
  height: 6px;
  background: rgba(0, 255, 255, 0.4);
  top: 5px;
  left: 50%;
  transform-origin: center 55px;
}
</style>

<script>
const container = document.querySelector('.particles');
for (let i = 0; i < 25; i++) {
  const particle = document.createElement('div');
  particle.classList.add('particle');
  const size = Math.random() * 10 + 5;
  particle.style.width = `${size}px`;
  particle.style.height = `${size}px`;
  particle.style.top = `${Math.random() * 100}%`;
  particle.style.left = `${Math.random() * 100}%`;
  particle.style.animationDuration = `${5 + Math.random() * 10}s`;
  container.appendChild(particle);
}

// 🕒 Jam Digital + Analog
function updateClock() {
  const now = new Date();
  document.getElementById("clock").textContent = now.toLocaleTimeString();

  const sec = now.getSeconds() + now.getMilliseconds() / 1000;
  const min = now.getMinutes() + sec / 60;
  const hr = (now.getHours() % 12) + min / 60;

  const secDeg = sec * 6;
  const minDeg = min * 6;
  const hrDeg = hr * 30;

  document.querySelector(".hand.second").style.transform = `rotate(${secDeg}deg)`;
  document.querySelector(".hand.minute").style.transform = `rotate(${minDeg}deg)`;
  document.querySelector(".hand.hour").style.transform = `rotate(${hrDeg}deg)`;

  requestAnimationFrame(updateClock);
}
requestAnimationFrame(updateClock);

const clock = document.querySelector(".clock-container");
for (let i = 1; i <= 12; i++) {
  const number = document.createElement("div");
  number.classList.add("number");
  number.textContent = i;
  const angle = (i * 30 - 90) * (Math.PI / 180);
  const radius = 45;
  number.style.left = 60 + radius * Math.cos(angle) - 5 + "px";
  number.style.top = 60 + radius * Math.sin(angle) - 8 + "px";
  clock.appendChild(number);
}
for (let i = 0; i < 60; i++) {
  const tick = document.createElement("div");
  tick.classList.add("tick");
  tick.style.transform = `rotate(${i * 6}deg) translateY(-55px)`;
  clock.appendChild(tick);
}
</script>

</body>
</html>
