<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mhs'];
    $jk = $_POST['jk'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_hp = $_POST['no_hp'];
    $kelas = $_POST['kelas'];
    $foto = $_POST['foto'];
    $password = $_POST['password'];
    $status = $_POST['status'];

    $sql = "INSERT into mahasiswa values ('$nim','$nama','$jk','$tgl_lahir','$no_hp','$kelas','$foto',md5('$password'),'$status') ";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: data_mahasiswa.php?status=sukses');
    } else {
        header('Location: data_mahasiswa.php?status=gagal');
    }
}
