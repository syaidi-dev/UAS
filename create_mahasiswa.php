<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$npm		 	= $_POST['npm'];
$nama 			= $_POST['nama'];
$tempat_lahir 	= $_POST['tempat_lahir'];
$tanggal_lahir	= $_POST['tanggal_lahir'];
$jenis_kelamin	= $_POST['jk'];
$alamat			= $_POST['alamat'];
$kode_pos		= $_POST['kode_pos'];


// menginput data ke database
$add=mysqli_query($conn,"INSERT INTO tb_mahasiswa VALUES('$npm','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$kode_pos')");

if($add){ // Cek jika proses simpan ke database sukses atau tidak
		header("location:mahasiswa.php?Message=Success!!!")or die(mysql_error());

}else{
	// Jika Gagal, Lakukan :
		header("location:mahasiswa.php?Message=error!!!")or die(mysql_error());
	}

?>