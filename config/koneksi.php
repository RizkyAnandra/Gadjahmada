<?php

// panggil fungsi validasi xss dan injection
require_once('fungsi_validasi.php');

$server =  "localhost";
$username = "root";
$password = "";
$database = "ppdb";

// Koneksi dan memilih database di server
$query = mysqli_connect($server,$username,$password) or die("Koneksi gagal");
mysqli_select_db($query,$database) or die("Maaf DB belum tersedia");

// buat variabel untuk validasi dari file fungsi_validasi.php
$val = new validasi;

?>
