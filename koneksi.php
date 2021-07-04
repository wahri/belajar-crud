<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$nama_db = 'sisfo_180401187';
$koneksi = mysqli_connect($host, $user, $pass, $nama_db);

if(!$koneksi){
    die("koneksi gagal: ".mysqli_connect_error());
}
