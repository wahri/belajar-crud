<?php
include 'koneksi.php';
$nim = $_GET["nim"];
//jalankan query DELETE untuk menghapus data
$query = "DELETE FROM mahasiswa WHERE nim='$nim' ";
$hasil_query = mysqli_query($koneksi, $query);
//periksa query, apakah ada kesalahan
if (!$hasil_query) {
    die("Gagal menghapus data: " . mysqli_error($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus.');window.location='data_mahasiswa.php';</script>";
}
