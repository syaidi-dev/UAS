<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$npm = $_GET['npm'];

// menghapus data dari database
mysqli_query($conn,"DELETE FROM tb_mahasiswa WHERE npm='$npm'");

// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");

?>