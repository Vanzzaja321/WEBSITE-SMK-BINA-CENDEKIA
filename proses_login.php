<?php
session_start();
include "koneksi.php";

// ===== Konfigurasi batas percobaan dan waktu kunci =====
define('MAX_ATTEMPTS', 3);
define('LOCK_DURATION', 30); // dalam detik

// Cek apakah akun masih terkunci
if (isset($_SESSION['locked_until']) && $_SESSION['locked_until'] > time()) {
    $_SESSION['error'] = "Akun Anda terkunci sementara. Silakan coba lagi setelah beberapa saat.";
    header("Location: login.php");
    exit;
}

// Ambil input
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = $_POST['password'];

// Cek user di database
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    $stored = $data['password'];

    // CASE 1: bcrypt
    if (strpos($stored, '$') === 0 && password_verify($password, $stored)) {
        // Login sukses
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['play_sound'] = true;

        // Reset percobaan
        unset($_SESSION['login_attempts']);
        unset($_SESSION['locked_until']);

        // Rehash bila perlu
        if (password_needs_rehash($stored, PASSWORD_DEFAULT)) {
            $newHash = password_hash($password, PASSWORD_DEFAULT);
            mysqli_query($koneksi, "UPDATE users SET password='$newHash' WHERE id='".$data['id']."'");
        }

        header("Location: index.php");
        exit;
    }

    // CASE 2: MD5
    elseif ($stored === md5($password)) {
        $newHash = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "UPDATE users SET password='$newHash' WHERE id='".$data['id']."'");

        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['play_sound'] = true;

        unset($_SESSION['login_attempts']);
        unset($_SESSION['locked_until']);

        header("Location: index.php");
        exit;
    }

    // CASE 3: Plaintext
    elseif ($stored === $password) {
        $newHash = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "UPDATE users SET password='$newHash' WHERE id='".$data['id']."'");

        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['play_sound'] = true;

        unset($_SESSION['login_attempts']);
        unset($_SESSION['locked_until']);

        header("Location: index.php");
        exit;
    }

    // CASE 4: Password salah
    else {
        // Hitung percobaan gagal
        $_SESSION['login_attempts'] = ($_SESSION['login_attempts'] ?? 0) + 1;

        if ($_SESSION['login_attempts'] >= MAX_ATTEMPTS) {
            $_SESSION['locked_until'] = time() + LOCK_DURATION;
            $_SESSION['error'] = "Terlalu banyak percobaan login gagal. Akun terkunci selama ".LOCK_DURATION." detik.";
        } else {
            $sisa = MAX_ATTEMPTS - $_SESSION['login_attempts'];
            $_SESSION['error'] = "Password salah! Sisa percobaan: $sisa kali.";
        }

        header("Location: login.php");
        exit;
    }
} else {
    // Username tidak ditemukan
    $_SESSION['login_attempts'] = ($_SESSION['login_attempts'] ?? 0) + 1;

    if ($_SESSION['login_attempts'] >= MAX_ATTEMPTS) {
        $_SESSION['locked_until'] = time() + LOCK_DURATION;
        $_SESSION['error'] = "Terlalu banyak percobaan login gagal. Akun terkunci selama ".LOCK_DURATION." detik.";
    } else {
        $sisa = MAX_ATTEMPTS - $_SESSION['login_attempts'];
        $_SESSION['error'] = "Username tidak ditemukan! Sisa percobaan: $sisa kali.";
    }

    header("Location: login.php");
    exit;
}
?>
