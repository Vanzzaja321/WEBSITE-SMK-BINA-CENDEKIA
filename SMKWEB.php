<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK Bina Cendekia Cirebon</title>
  <link rel="icon" type="image/png" href="images/LOGOBERSIH.png">

  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />
</head>
<body>

  <!-- Header Atas -->
  <div class="top-bar">
    <div class="left-info">
      <!-- Nomor Telepon ke WhatsApp -->
      <i class="fab fa-whatsapp"></i>
      <a href="https://wa.me/6285691992000" target="_blank">0856-9199-2000</a>
      <span class="separator">|</span>

      <!-- Gmail -->
      <i class="fas fa-envelope"></i>
      <a href="mailto:smkBCC@gmail.com">smkBCC@gmail.com</a>
    </div>

    <div class="right-info">
      <span>Media Sosial :</span>

      <!-- Instagram -->
      <a href="https://www.instagram.com/smkbinacendekia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>

      <!-- TikTok -->
      <a href="https://www.tiktok.com/@smkbcc" target="_blank">
        <i class="fab fa-tiktok"></i>
      </a>

      <!-- YouTube -->
      <a href="https://www.youtube.com/@smkbcc" target="_blank">
        <i class="fab fa-youtube"></i>
      </a>
    </div>
  </div>


<!-- ================= POPUP SELAMAT DATANG ================= -->
<div class="welcome-popup" id="welcomePopup">
  <div class="popup-content">
    <button class="close-popup" id="closePopup">&times;</button>

    <h2>SMK BINA CENDEKIA</h2>
    <img src="images/LOGOBERSIH.png" alt="Logo Sekolah" class="popup-logo">

    <p>SMK Pusat Keunggulan Berbasis Industri</p>
    <p>SMK Bina Cendekia Cirebon adalah sekolah berbasis industri dan pesantren yang mencetak lulusan terampil, berakhlak, dan siap kerja melalui perpaduan pendidikan vokasi modern dan nilai-nilai Islami.<br>Terakreditasi <b>“A”</b></p>

    <p><b>SMK BISA, SMK JAYA, SMK GARUDA, SMK LUAR BIASA</b></p>

    <span class="popup-footer">© Avrilliano Haqiqi 2025</span>
  </div>
</div>


  <!-- Navbar -->
  <header>
    <div class="navbar">
      <div class="logo">
        <img src="images/LOGOBERSIH.png" alt="Logo SMK Bina Cendekia">
      </div>

      <nav id="menu">
        <ul>
          <li><a href="SMKWEB.PHP" class="active">Home</a></li>
          <li><a href="spmb.php">SPMB</a></li>
          <li><a href="tentang_kami.php">Tentang Kami</a></li>
          <li><a href="ekstrakurikuler.php">Ekstrakurikuler</a></li>
          <li><a href="fasilitas.php">Fasilitas</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="guru_dan_karyawan.php">Guru dan Karyawan</a></li>
          <li><a href="prestasi.php">Prestasi</a></li>
          <li><a href="berita.php">Berita</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

      <a href="login.php" class="login-btn">
        <i class="fas fa-user"></i> LOGIN
      </a>

<header>

      <div class="menu-toggle" id="menu-toggle">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </header>

<!-- ====== HOME SLIDER SECTION ====== -->
<section class="home-slider">
  <!-- ===== SLIDE 1 ===== -->
  <div class="slide active" style="background-image: url('images/GURUCEWE.jpg');">
    <div class="overlay"></div>
    <div class="slide-content">
      <span class="tagline">SMK Bina Cendeka Cirebon</span>
      <h1 class="title">Religious, Profesional & Competence</h1>
      <p class="desc">
        Sekolah unggulan berkomitmen mencetak generasi berprestasi, berkarakter, dan siap bersaing.
      </p>
      <div class="buttons">
        <a href="#" class="btn-slide">Profil Sekolah</a>
        <a href="#" class="btn-slide outline">Kesiswaan</a>
      </div>
    </div>
  </div>

  <!-- ===== SLIDE 2 ===== -->
  <div class="slide" style="background-image: url('images/GURUCOWO.jpg');">
    <div class="overlay"></div>
    <div class="slide-content">
      <span class="tagline">SMK Bina Cendeka Cirebon</span>
      <h1 class="title">Berkarakter & Berwawasan & berprestasi</h1>
      <p class="desc">
        Mengembangkan potensi peserta didik melalui pembelajaran yang inovatif dan religius.
      </p>
      <div class="buttons">
        <a href="#" class="btn-slide">Fasilitas</a>
        <a href="#" class="btn-slide outline">Ekstrakurikuler</a>
      </div>
    </div>
  </div>

  <!-- ===== SLIDE 3 ===== -->
  <div class="slide" style="background-image: url('images/GURU.jpg');">
    <div class="overlay"></div>
    <div class="slide-content">
      <span class="tagline">SMK Bina Cendeka Cirebon</span>
      <h1 class="title">Siap bersaing di dunia industri</h1>
      <p class="desc">
        Dengan kurikulum link and match, siswa siap menghadapi dunia kerja dan wirausaha.
      </p>
      <div class="buttons">
        <a href="#" class="btn-slide">Prestasi</a>
        <a href="#" class="btn-slide outline">Hubungi Kami</a>
      </div>
    </div>
  </div>

  <!-- ===== NAVIGATION ARROWS ===== -->
  <div class="nav-arrow prev"><i class="fas fa-chevron-left"></i></div>
  <div class="nav-arrow next"><i class="fas fa-chevron-right"></i></div>
</section>

<!-- ================== SAMBUTAN KEPALA SEKOLAH ================== -->
<!-- ================== SAMBUTAN KEPALA SEKOLAH ================== -->
<section class="sambutan-section" id="sambutan">
  <div class="sambutan-header">
    <img src="images/LOGOBERSIH.png" alt="Logo SMK Bina Cendekia">
    <h2>Sambutan Kepala Sekolah</h2>
  </div>

  <div class="sambutan-content">
    <!-- Kiri: Teks Sambutan -->
    <div class="sambutan-text">
      <p>
        Selamat datang di <strong>SMK Bina Cendekia Cirebon</strong>!  
        Kami berkomitmen mencetak generasi yang unggul dalam karakter, profesionalisme, dan kemampuan teknologi.
        Dengan semangat inovasi dan kerja keras, kami terus berupaya menciptakan lingkungan belajar yang inspiratif, adaptif, dan berwawasan global.
      </p>
      <p class="sambutan-quote">“SMK Bisa! Bina Cendekia Hebat, Cerdas, dan Berkarakter.”</p>

      <div class="sambutan-buttons">
        <a href="#" class="btn-sambutan"><i class="fas fa-user-graduate"></i> Sambutan</a>
        <a href="#" class="btn-visimisi"><i class="fas fa-bullseye"></i> Visi & Misi</a>
      </div>
    </div>

    <!-- Kanan: Foto Kepala Sekolah -->
    <div class="sambutan-foto">
      <img src="images/FOTOKEPALASEKOLAH.png" alt="Kepala Sekolah SMK Bina Cendekia">
      <h3>Bapak Ade Rahmat Saputra M.p</h3>
      <p>Kepala Sekolah SMK Bina Cendekia Cirebon</p>
    </div>
  </div>
</section>

<!-- =======================
   START: STATISTIK SEKOLAH
======================= -->
<section class="stats-section">
  <div class="stats-container">
    <div class="stat-item">
      <h2 class="counter" data-target="1060">0</h2>
      <p>Siswa</p>
    </div>
    <div class="divider"></div>
    <div class="stat-item">
      <h2 class="counter" data-target="71">0</h2>
      <p>Guru dan Karyawan</p>
    </div>
    <div class="divider"></div>
    <div class="stat-item">
      <h2 class="counter" data-target="28">0</h2>
      <p>Total Ruang Kelas</p>
    </div>
     <div class="divider"></div>
    <div class="stat-item">
      <h2 class="counter" data-target="14">0</h2>
      <p>Total Laboratorium</p>
    </div>
     <div class="divider"></div>
    <div class="stat-item">
      <h2 class="counter" data-target="11">0</h2>
      <p>Total Ekstrakurikuler</p>
    </div>


</section>

<!-- ====== Hubungkan CSS dan JS ====== -->
<link rel="stylesheet" href="statistik.css">
<script src="statistik.js" defer></script>
<!-- =======================
   END: STATISTIK SEKOLAH
======================= -->


<!-- ====== KUNCI SUKSES SMK BINA CENDEKIA START ====== -->
<section class="kunci-sukses">
  <div class="container">
    <div class="top-section">
      <!-- FOTO SEKOLAH / GURU -->
      <div class="image-box landscape">
        <div class="img-wrapper">
          <img src="images/GURUCOWO.jpg" alt="Guru Laki-laki SMK Bina Cendekia">
          <p></p>
        </div>
        <div class="img-wrapper">
          <img src="images/GURUCEWE.jpg" alt="Guru Perempuan SMK Bina Cendekia">
          <p></p>
        </div>
      </div>

      <!-- TEKS KUNCI SUKSES -->
      <div class="text-box">
        <h4>Kunci Sukses SMK Bina Cendekia</h4>
        <h2>Faktor Kunci Pembentuk<br>Generasi Hebat</h2>
        <p>
          SMK Bina Cendekia hadir sebagai institusi pendidikan yang berkomitmen memberikan layanan terbaik bagi siswa,
          melalui pengajaran yang bermutu, tenaga pendidik profesional, serta lingkungan belajar yang mendukung
          pengembangan potensi setiap peserta didik.
        </p>
      </div>
    </div>

    <!-- FITUR BAWAH -->
    <div class="features">
      <div class="feature-item">
        <div class="icon">📘</div>
        <h3>Kurikulum Berkualitas</h3>
        <p>
          Materi pembelajaran disusun untuk mengembangkan akademik dan karakter secara seimbang.
        </p>
      </div>
      <div class="feature-item">
        <div class="icon">👨‍🏫</div>
        <h3>Guru Profesional</h3>
        <p>
          Guru berpengalaman dan berdedikasi dalam menciptakan suasana belajar yang aktif.
        </p>
      </div>
      <div class="feature-item">
        <div class="icon">🏫</div>
        <h3>Fasilitas Lengkap</h3>
        <p>
          Didukung sarana belajar modern yang menunjang kenyamanan dan kreativitas siswa.
        </p>
      </div>
      <div class="feature-item">
        <div class="icon">💪</div>
        <h3>Pengembangan Karakter</h3>
        <p>
          Beragam kegiatan untuk membentuk siswa yang percaya diri, mandiri, dan bertanggung jawab.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- ====== KUNCI SUKSES SMK BINA CENDEKIA END ====== -->

<section class="program-jurusan-container">
  <h1 class="program-jurusan-title">PROGRAM JURUSAN</h1>
  <h2 class="program-jurusan-subtitle">SEKOLAH BERBASIS INDUSTRI & PESANTREN</h2>

  <div class="program-jurusan-grid">
    <!-- Card 1 -->
    <div class="program-jurusan-card">
      <img src="images/RPL.png" alt="Logo RPL">
      <h3 class="jurusan-nama">RPL</h3>
      <p class="jurusan-deskripsi">Rekayasa Perangkat Lunak</p>
    </div>

    <!-- Card 2 -->
    <div class="program-jurusan-card">
      <img src="images/DPB.png" alt="Logo DPB">
      <h3 class="jurusan-nama">DPB</h3>
      <p class="jurusan-deskripsi">Desain Produksi Busana</p>
    </div>

    <!-- Card 3 -->
    <div class="program-jurusan-card">
      <img src="images/LK.png" alt="Logo LK">
      <h3 class="jurusan-nama">LK</h3>
      <p class="jurusan-deskripsi">Layanan Kesehatan</p>
    </div>

    <!-- Card 4 -->
    <div class="program-jurusan-card">
      <img src="images/TBO.png" alt="Logo TBO">
      <h3 class="jurusan-nama">TBO</h3>
      <p class="jurusan-deskripsi">Teknik Bodi Otomotif</p>
    </div>

    <!-- Card 5 -->
    <div class="program-jurusan-card">
      <img src="images/STI.png" alt="Logo STI">
      <h3 class="jurusan-nama">STI</h3>
      <p class="jurusan-deskripsi">Samsung Tech Institute</p>
    </div>

    <!-- Card 6 -->
    <div class="program-jurusan-card">
      <img src="images/DKV.png" alt="Logo DKV">
      <h3 class="jurusan-nama">DKV</h3>
      <p class="jurusan-deskripsi"> Desain Komunikasi Visual </p>
    </div>
  </div>
</section>


  <!-- ========================================================= -->
  <!-- ====== BAGIAN UTAMA (CONTAINER SEMUA KONTEN) ====== -->
  <!-- ========================================================= -->
  <section class="guru-staf-container">

    <!-- ====== JUDUL HALAMAN ====== -->
    <h1 class="guru-staf-title">Daftar Guru & Staf Karyawan</h1>
    <h2 class="guru-staf-subtitle">SMK BINA CENDEKIA</h2>


    <!-- ========================================================= -->
    <!-- ====== DAFTAR KARTU GURU & STAF ====== -->
    <!-- ========================================================= -->
    <div class="guru-staf-grid">

      <!-- ====== KARTU 1 ====== -->
      <div class="guru-staf-card">
        <img src="images/FOTOKEPALASEKOLAH.png" alt="Foto Guru 1">
        <h3 class="guru-nama">1. Andi Pratama, S.Pd., M.Pd</h3>
        <p class="guru-jabatan">Waka Kurikulum - Guru Produktif RPL</p>
        <div class="guru-icon">
          <a href="#"><i class="fas fa-envelope"></i></a>
          <a href="#"><i class="fas fa-phone"></i></a>
        </div>
      </div>

      <!-- ====== KARTU 2 ====== -->
      <div class="guru-staf-card">
        <img src="images/FOTOKEPALASEKOLAH.png" alt="Foto Guru 2">
        <h3 class="guru-nama">2. Siti Rahmawati, S.Pd</h3>
        <p class="guru-jabatan">Guru Bahasa Inggris</p>
        <div class="guru-icon">
          <a href="#"><i class="fas fa-envelope"></i></a>
          <a href="#"><i class="fas fa-phone"></i></a>
        </div>
      </div>

      <!-- ====== KARTU 3 ====== -->
      <div class="guru-staf-card">
        <img src="images/FOTOKEPALASEKOLAH.png" alt="Foto Guru 3">
        <h3 class="guru-nama">3. Budi Santoso, S.Kom</h3>
        <p class="guru-jabatan">Guru Produktif TKJ</p>
        <div class="guru-icon">
          <a href="#"><i class="fas fa-envelope"></i></a>
          <a href="#"><i class="fas fa-phone"></i></a>
        </div>
      </div>

      <!-- ====== KARTU 4 ====== -->
      <div class="guru-staf-card">
        <img src="images/FOTOKEPALASEKOLAH.png" alt="Foto Guru 4">
        <h3 class="guru-nama">4. Rini Marlina, S.Pd</h3>
        <p class="guru-jabatan">Guru Matematika</p>
        <div class="guru-icon">
          <a href="#"><i class="fas fa-envelope"></i></a>
          <a href="#"><i class="fas fa-phone"></i></a>
        </div>
      </div>

      <!-- ====== KARTU 5 ====== -->
      <div class="guru-staf-card">
        <img src="images/FOTOKEPALASEKOLAH.png" alt="Foto Guru 5">
        <h3 class="guru-nama">5. Fajar Wicaksono, S.Pd</h3>
        <p class="guru-jabatan">Guru Bimbingan Konseling</p>
        <div class="guru-icon">
          <a href="#"><i class="fas fa-envelope"></i></a>
          <a href="#"><i class="fas fa-phone"></i></a>
        </div>
      </div>

    </div> <!-- Akhir Grid -->


    <!-- ========================================================= -->
    <!-- ====== TOMBOL LIHAT SEMUA ====== -->
    <!-- ========================================================= -->
    <div class="lihat-semua-container">
    <a href="galeri.php" class="lihat-semua-btn">Lihat Semua</a>
  </div>

  </section>


 <!-- ========================== -->
<!-- DOKUMENTASI & PRESTASI SISWA -->
<!-- ========================== -->
<section class="dokumentasi-section">
  <h1 class="dokumentasi-title">DOKUMENTASI PRESTASI & KEGIATAN SISWA</h1>

  <div class="dokumentasi-grid">
    <!-- 1 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCEWE.jpg" alt="Prestasi Siswa SMK Bina Cendekia">
      <p>Juara 1 Lomba Inovasi Teknologi 2025</p>
    </div>
    <!-- 2 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCOWO.jpg" alt="Kegiatan Pramuka">
      <p>Kegiatan Pramuka dan Leadership Camp</p>
    </div>
    <!-- 3 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCEWE.jpg" alt="Kegiatan Workshop">
      <p>Workshop Kewirausahaan dan Industri Kreatif</p>
    </div>
    <!-- 4 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCOWO.jpg" alt="Lomba Desain Grafis">
      <p>Juara 2 Lomba Desain Grafis Tingkat Provinsi</p>
    </div>
    <!-- 5 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCEWE.jpg" alt="Pentas Seni">
      <p>Pentas Seni & Musik Kreatif Siswa</p>
    </div>
    <!-- 6 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCOWO.jpg" alt="Kegiatan OSIS">
      <p>Lomba Kepemimpinan OSIS Antar Sekolah</p>
    </div>
    <!-- 7 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCEWE.jpg" alt="Pelatihan Digital">
      <p>Pelatihan Desain Digital dan Multimedia</p>
    </div>
    <!-- 8 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCOWO.jpg" alt="Kegiatan Sosial">
      <p>Kegiatan Bakti Sosial dan Donasi</p>
    </div>
    <!-- 9 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCEWE.jpg" alt="Pameran Teknologi">
      <p>Pameran Teknologi Inovasi Siswa SMK</p>
    </div>
    <!-- 10 -->
    <div class="dokumentasi-item">
      <img src="images/GURUCOWO.jpg" alt="Kegiatan Rohis">
      <p>Kegiatan Rohis & Pembinaan Karakter Islami</p>
    </div>
  </div>

  <!-- Tombol "Lihat Semua" -->
  <div class="lihat-semua-container">
    <a href="galeri.php" class="lihat-semua-btn">Lihat Semua</a>
  </div>
</section>



<!-- ========================== -->
<!-- VIDEO KEGIATAN YOUTUBE -->
<!-- ========================== -->
<section class="video-section">
  <h1 class="video-title">VIDEO KEGIATAN SEKOLAH</h1>
  <div class="video-grid">
    <!-- Video 1 -->
    <div class="video-frame">
      <iframe 
        src="https://www.youtube.com/embed/fHKE5gt70b8?autoplay=0" 
        title="Profil Sekolah SMK Bina Cendekia"
        allowfullscreen>
      </iframe>
      <p>ADZAN SHUBUH_MOHAMAD ZAKI UDIN</p>
    </div>

    <!-- Video 2 -->
    <div class="video-frame">
      <iframe 
        src="https://www.youtube.com/embed/w_6RSuaIKoo?autoplay=0" 
        title="Kegiatan Siswa"
        allowfullscreen>
      </iframe>
      <p>MTQ Zahra Ayu Aulia - QS. Al Isro Ayat 1</p>
    </div>

    <!-- Video 3 -->
    <div class="video-frame">
      <iframe 
        src="https://www.youtube.com/embed/dEgtT_Kl4g8?autoplay=0" 
        title="Prestasi Sekolah"
        allowfullscreen>
      </iframe>
      <p>MTarQ IRMALA QS AL ISRO AYAT 1</p>
    </div>
  </div>
</section>


  

  
  <!-- ====== BAGIAN PENDAFTARAN ====== -->
  <section class="pendaftaran">
    <div class="pendaftaran-content">
      <div class="pendaftaran-text">
        <h1>Bergabunglah Bersama <span>SMK Bina Cendekia</span></h1>
        <p>Wujudkan Masa Depan Gemilangmu Bersama Sekolah Vokasi Unggulan Kami!</p>
      </div>
      <div class="pendaftaran-btn">
        <a href="spmb.php" class="btn-daftar">Daftar Sekarang</a>
      </div>
    </div>
  </section>

  <!-- ====== FOOTER ====== -->
  <footer class="footer">
    <div class="footer-container">

      <!-- LOGO & DESKRIPSI -->
      <div class="footer-about">
        <img src="images/LOGOFOOTER.png" alt="Logo SMK Bina Cendekia" class="footer-logo">
        <p>SMK Bina Cendekia Cirebon adalah sekolah kejuruan berbasis industri dan pesantren yang berkomitmen mencetak lulusan unggul, berakhlak, dan siap bersaing di dunia kerja maupun wirausaha.</p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- MENU -->
      <div class="footer-menu">
        <h3>Menu Kami</h3>
        <ul>
          <li><a href="spmb.php">SPMB</a></li>
          <li><a href="tentang.php">Tentang Kami</a></li>
          <li><a href="ekstrakurikuler.php">Ekstrakurikuler</a></li>
          <li><a href="fasilitas.php">Fasilitas</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="guru_dan_karyawan.php">Guru dan Karyawan</a></li>
          <li><a href="prestasi.php">Prestasi</a></li>
          <li><a href="berita.php">Berita</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <!-- KONTAK -->
      <div class="footer-contact">
        <h3>Kontak Kami</h3>
        <p><strong>Alamat:</strong><br>Jl. Pendidikan No. 12, Cirebon, Jawa Barat</p>
        <p><strong>Email:</strong><br>smkbinacendekia@gmail.com</p>
        <p><strong>Telepon:</strong><br>+62 812-3456-7890</p>
      </div>

      <!-- ARTIKEL TERBARU -->
      <div class="footer-article">
        <h3>Artikel Terbaru</h3>
        <div class="article-item">
          <img src="img/GURUCOWO.jpg" alt="Artikel 1">
          <p>Pendaftaran Siswa Baru Tahun Ajaran 2025/2026 Resmi Dibuka!</p>
        </div>
        <div class="article-item">
          <img src="img/GURUCEWE.jpg" alt="Artikel 2">
          <p>Prestasi Siswa SMK Bina Cendekia di Lomba Inovasi Teknologi</p>
        </div>
      </div>
    </div>

    <hr class="footer-line">
    <p class="footer-copy">© 2025 SMK Bina Cendekia Cirebon | Website by Avrilliano Haqiqi</p>
  </footer>


  
  
</body>
</html>

<!-- Tambahkan script JS -->
<script src="script.js"></script>

