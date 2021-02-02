<?php 
 $host	="localhost";
 $user	="root";
 $pass	="";
 $db	="db_mahasiswa";

 $conn = mysqli_connect($host,$user,$pass,$db);

// Check connection
if (mysqli_connect_errno()){
	echo "Database Connection Failed :(" . mysqli_connect_error();
}

//if($conn){
//  echo "Database Connection Success";
//} else{
//  echo "Database Connection Failed" . mysqli_connect_error();
//  die();
//}
?>