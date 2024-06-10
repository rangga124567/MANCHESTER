<?php 

$dbhost = 'localhost';
$dbuser = 'id22278559_manchester01';
$dbpass = 'Manchester0!';
$db = 'id22278559_manchester';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn); 

date_default_timezone_set('Asia/Jakarta');

if (mysqli_connect_error()){
	echo "Koneksi database gagal :". mysqli_connect_error();
}

?>