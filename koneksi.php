<?php
$host		="localhost";
$user		="root";
$pass		="";
$db			="db_mahasiswa";

$conn=mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno()){
	echo"Database Connection Failed :(".mysqli_connect_error();
}
?>