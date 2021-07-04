<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$level = $_POST['level'];

if ($level == 1) {
    $login = mysqli_query($koneksi, "SELECT * FROM tatausaha WHERE nip='$username' and password=md5('$password')");

    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);

        $_SESSION['username'] = $username;
        $_SESSION['level'] = 1;
        header("Location: data_mahasiswa.php");
    } else {
        header("Location: index.php?pesan=gagal");
    }
} elseif ($level == 2) {
    $login = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$username' AND password=md5('$password') AND status='Aktif'");

    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);

        $_SESSION['username'] = $username;
        $_SESSION['level'] = 2;
        header("Location: mahasiswa.php?nama=". $data['nama_mhs']);
    } else {
        header("Location: index.php?pesan=gagal");
    }
} else {
    echo "You're not supposed to be here, get out of here!";
}