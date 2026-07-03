<?php 

date_default_timezone_set('Asia/jakarta');

$host   = 'localhost';
$user   = 'root';
$pass   = '';
$dbname = 'db_pos_grosir';

$koneksi = mysqli_connect($host,$user,$pass,$dbname);

// if (mysqli_connect_errno()) {
//     echo "gagal koneksi ke database";
//     exit();
// } else {
//     echo "berhasil koneksi ke database";
// } 

$main_url = 'http://localhost/pos_grosir/';