<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$npm 	  	        = $_POST['npm'];
$nama             = $_POST['nama'];
$tempat_lahir     = $_POST['tempat_lahir'];
$tanggal_lahir    = $_POST['tanggal_lahir'];
$jenis_kelamin    = $_POST['jk'];
$alamat           = $_POST['alamat'];
$kode_pos         = $_POST['kode_pos'];

// update data ke database
$update=mysqli_query($conn,"UPDATE tb_mahasiswa SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat',kode_pos='$kode_pos' WHERE npm='$npm'");

if($update){ // Cek jika proses simpan ke database sukses atau tidak
		echo '<div>
      			<div><h1><center>Information</center></h1></div>
      			<center><p>Update Sukses :)</p></center>
      			<center><a href="mahasiswa.php"><button id="oke">Oke</button></a></center>
    		  </div>';

}else{
		// Jika Gagal, Lakukan :
		echo '<div>
      			<div><h1><center>Information</center></h1></div>
      			<center><p>Something is Wrong :(</p></center>
      			<center><a href="edit.php"><button id="oke">Oke</button></a></center>
    		  </div>';
	}

?>