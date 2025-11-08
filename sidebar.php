<?php
// Pastikan session sudah start di file utama
if (!isset($_SESSION['level'])) {
    header("Location: index.php");
    exit;
}

$level = $_SESSION['level'];
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="images/lOGOSMK.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SMK BINA CENDEKIA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="images/logo.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $_SESSION['username']; ?> (<?= $level ?>)</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Admin Menu -->
        <?php if($level == 'admin'): ?>
         <li class="nav-item">
<li class="nav-item">
  <a href="index.php" class="nav-link">
    <i class="fa fa-home"></i>
    <p>Home</p>
  </a>
</li>

<li class="nav-item">
  <a href="tentang_kami.php" class="nav-link">
    <i class="fa fa-info-circle"></i>
    <p>Tentang Kami</p>
  </a>
</li>

<li class="nav-item">
  <a href="kegiatan.php" class="nav-link">
    <i class="fa fa-users"></i>
    <p>Ekstrakurikuler</p>
  </a>
</li>

<li class="nav-item">
  <a href="fasilitas.php" class="nav-link">
    <i class="fa fa-school"></i>
    <p>Fasilitas</p>
  </a>
</li>

<li class="nav-item">
  <a href="galeri.php" class="nav-link">
    <i class="fa fa-images"></i>
    <p>Galeri</p>
  </a>
</li>

<li class="nav-item">
  <a href="guru_karyawan.php" class="nav-link">
    <i class="fa fa-chalkboard-teacher"></i>
    <p>Guru & Karyawan</p>
  </a>
</li>

<li class="nav-item">
  <a href="berita.php" class="nav-link">
    <i class="fa fa-newspaper"></i>
    <p>Berita</p>
  </a>
</li>

<li class="nav-item">
  <a href="contact.php" class="nav-link">
    <i class="fa fa-envelope"></i>
    <p>Contact</p>
  </a>
</li>


        <?php endif; ?>

        <!-- Operator Menu -->
        <?php if($level == 'operator'): ?>
         <li class="nav-item">
<li class="nav-item">
  <a href="index.php" class="nav-link">
    <i class="fa fa-home"></i>
    <p>Home</p>
  </a>
</li>

<li class="nav-item">
  <a href="tentang_kami.php" class="nav-link">
    <i class="fa fa-info-circle"></i>
    <p>Tentang Kami</p>
  </a>
</li>

<li class="nav-item">
  <a href="kegiatan.php" class="nav-link">
    <i class="fa fa-users"></i>
    <p>Ekstrakurikuler</p>
  </a>
</li>

<li class="nav-item">
  <a href="fasilitas.php" class="nav-link">
    <i class="fa fa-school"></i>
    <p>Fasilitas</p>
  </a>
</li>

<li class="nav-item">
  <a href="galeri.php" class="nav-link">
    <i class="fa fa-images"></i>
    <p>Galeri</p>
  </a>
</li>

<li class="nav-item">
  <a href="guru_karyawan.php" class="nav-link">
    <i class="fa fa-chalkboard-teacher"></i>
    <p>Guru & Karyawan</p>
  </a>
</li>

<li class="nav-item">
  <a href="berita.php" class="nav-link">
    <i class="fa fa-newspaper"></i>
    <p>Berita</p>
  </a>
</li>

<li class="nav-item">
  <a href="contact.php" class="nav-link">
    <i class="fa fa-envelope"></i>
    <p>Contact</p>
  </a>
</li>

        <?php endif; ?>
        

      <!-- Logout -->
      <li class="nav-item logout-btn">
       <a href="logout.php" class="nav-link btn btn-danger text-white">
    <i class="nav-icon fas fa-sign-out-alt"></i>
    <p>Logout</p>
  </a>
</li>

          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

