<?php
include 'koneksi.php';

session_start();
if ($_SESSION['level'] != 1) {
    header("Location: index.php?pesan=out");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <div class="table-users">
        <div class="header">Data Mahasiswa</div>

        <table cellspacing="0" class="text-center">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>No HP</th>
                    <th>Kelas</th>
                    <!-- <th width="100px">Password</th> -->
                    <th>Status</th>
                    <th width="100px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM mahasiswa";
                $query = mysqli_query($koneksi, $sql);

                while ($mhs = mysqli_fetch_array($query)) :
                ?>
                    <tr>
                        <td><img src="<?= $mhs['foto'] ?>" alt="<?= $mhs['foto'] ?>" alt="" /></td>
                        <td><?= $mhs['nim'] ?></td>
                        <td><?= $mhs['nama_mhs'] ?></td>
                        <td><?= $mhs['jk'] ?></td>
                        <td><?= $mhs['tgl_lahir'] ?></td>
                        <td><?= $mhs['no_hp'] ?></td>
                        <td><?= $mhs['kelas'] ?></td>
                        <!-- <td><?= $mhs['password'] ?></td> -->
                        <td><?= $mhs['status'] ?></td>
                        <td>
                            <a href="form_edit_data.php?nim=<?= $mhs['nim'] ?>" class="badge badge-warning">Edit</a>
                            <a href="hapus_data.php?nim=<?= $mhs['nim'] ?>" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-4">
                    <a href="form_tambah_data.php" class="btn btn-primary btn-lg">Tambah Baru</a>
                </div>
                <div class="col-md-4 text-center">
                    <h5 class="text-monospace">Total : <?= mysqli_num_rows($query) ?></h5>
                </div>
                <div class="col-md-4 text-right">
                    <a href="proses_logout.php" class="btn btn-secondary btn-lg">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>