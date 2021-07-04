<?php
include("koneksi.php");
// jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    // ambil data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $kelas = $_POST['kelas'];
    $status = $_POST['status'];
    // buat query
    $sql = "UPDATE mahasiswa SET nama_mhs='$nama', jk='$jk', kelas='$kelas', status='$status' WHERE nim='$nim'";
    $query = mysqli_query($koneksi, $sql);
    if (!$query) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil diubah.'); window.location='data_mahasiswa.php'; </script>";
    }
}
