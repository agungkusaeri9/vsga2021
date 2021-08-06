<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'pmauser'; // User Server
$db_pass = 'pmapass'; // Password Server
$db_name = 'vsga2021'; // Nama Database

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}