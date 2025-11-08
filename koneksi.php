<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_db = "sekolah_vano";

$koneksi = mysqli_connect("localhost","root","","sekolah_vano");

if( !$koneksi){
    die("Gagal terhubung dengan database:" .mysqli_connect_error());
}

?>
