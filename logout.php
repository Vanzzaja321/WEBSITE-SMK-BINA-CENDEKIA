<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
 <title>SMK Bina Cendekia Cirebon</title><title>SMK BINA CENDEKIA UTAMA CIREBON</title>
  <link rel="icon" type="image/png" href="images/LOGOBERSIH.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
  * {margin:0; padding:0; box-sizing:border-box;}
  body {
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:'Poppins', sans-serif;
    color:#fff;
    overflow:hidden;
    position:relative;
    background:#0a0a1f;
  }

  /* ===== Background Logo Blur ===== */
  .bg-blur {
    position:absolute;
    inset:0;
    background:url('images/LOGOBERSIH.png') center/contain no-repeat;
    opacity:0.25;
    filter:blur(7px);
    z-index:0;
  }

  /* ===== Floating Particles ===== */
  .particle {
    position:absolute;
    border-radius:50%;
    background:rgba(255,255,255,0.25);
    pointer-events:none;
    animation:floatUp linear forwards;
  }
  @keyframes floatUp {
    from {transform:translateY(0);opacity:0.8;}
    to {transform:translateY(-120vh);opacity:0;}
  }

  /* ===== Card Container ===== */
  .logout-card {
    position:relative;
    z-index:5;
    width:380px;
    padding:60px 50px;
    text-align:center;
    background:rgba(20,20,40,0.65);
    border:1px solid rgba(255,255,255,0.1);
    border-radius:25px;
    backdrop-filter:blur(18px);
    box-shadow:0 0 25px rgba(0,150,255,0.25);
    animation:fadeIn 1.2s ease forwards;
  }
  @keyframes fadeIn {
    from {transform:translateY(20px);opacity:0;}
    to {transform:translateY(0);opacity:1;}
  }

  .logout-card h1 {
    font-size:24px;
    font-weight:600;
    margin-bottom:10px;
    color:#fff;
  }
  .logout-card p {
    font-size:15px;
    color:#ccc;
    margin-bottom:35px;
  }

  /* ===== Circular Loader ===== */
  .progress-ring {
    position:relative;
    width:110px;
    height:110px;
    margin:0 auto 25px;
  }
  .progress-ring svg {
    width:110px;
    height:110px;
    transform:rotate(-90deg);
  }
  .progress-ring circle {
    fill:none;
    stroke-width:8;
    stroke-linecap:round;
    transform:translate(5px,5px);
  }
  .progress-ring .bg {
    stroke:rgba(255,255,255,0.15);
  }
  .progress-ring .progress {
    stroke:url(#gradient);
    stroke-dasharray:314;
    stroke-dashoffset:314;
    animation:progress 5s ease-in-out forwards;
  }
  @keyframes progress {
    from {stroke-dashoffset:314;}
    to {stroke-dashoffset:0;}
  }
  .progress-ring .icon {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    font-size:34px;
    color:#6cc8ff;
    text-shadow:0 0 20px #2575fc, 0 0 35px #6a11cb;
    animation:glow 2s infinite alternate;
  }
  @keyframes glow {
    from {text-shadow:0 0 10px #2575fc, 0 0 25px #6a11cb;}
    to {text-shadow:0 0 20px #6a11cb, 0 0 40px #2575fc;}
  }

  .footer-text {
    margin-top:10px;
    font-size:13px;
    opacity:0.7;
    letter-spacing:0.5px;
  }

  @media (max-width:480px){
    .logout-card{width:85%;padding:50px 25px;}
    .logout-card h1{font-size:22px;}
  }
</style>
</head>
<body>

<div class="bg-blur"></div>

<script>
/* Buat efek partikel lembut */
function createParticle(){
  const p=document.createElement("div");
  const s=Math.random()*4+2;
  const l=Math.random()*window.innerWidth;
  const d=Math.random()*8+5; // lebih lama sedikit
  p.classList.add("particle");
  p.style.width=`${s}px`;
  p.style.height=`${s}px`;
  p.style.left=`${l}px`;
  p.style.animationDuration=`${d}s`;
  document.body.appendChild(p);
  setTimeout(()=>p.remove(), d*1000);
}
setInterval(createParticle,350);
</script>

<div class="logout-card">
  <div class="progress-ring">
    <svg>
      <defs>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="#2575fc"/>
          <stop offset="100%" stop-color="#6a11cb"/>
        </linearGradient>
      </defs>
      <circle class="bg" cx="50" cy="50" r="50"></circle>
      <circle class="progress" cx="50" cy="50" r="50"></circle>
    </svg>
    <div class="icon"><i class="fa-solid fa-door-open"></i></div>
  </div>

  <h1>Anda Telah Logout</h1>
  <p>Mengarahkan kembali ke halaman login...</p>
  <div class="footer-text">SMK Bina Cendekia System</div>
</div>

<script>
/* Redirect lebih lama = 5 detik */
setTimeout(()=>{ 
  document.body.style.transition="opacity 0.8s ease";
  document.body.style.opacity="0";
  setTimeout(()=>window.location.href="login.php",900);
},5000);
</script>

</body>
</html>
