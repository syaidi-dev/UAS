<?php
// koneksi database
include 'koneksi.php';

$npm 	  	        = $_GET['npm'];

mysqli_query($conn, "DELETE FROM tb_mahasiswa WHERE npm='$npm' ");

header("location:mahasiswa.php");

?>