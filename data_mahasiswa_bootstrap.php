<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container-fluid mt-5">
        <h1>Data Mahasiswa</h1>
        <a href="form_tambah_data.php">[+] Tambah Baru</a>
        <div class="row mt-3">
            <div class="col-12">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>No HP</th>
                            <th>Kelas</th>
                            <th>Foto</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM mahasiswa";
                        $query = mysqli_query($koneksi, $sql);

                        while ($mhs = mysqli_fetch_array($query)) :
                        ?>

                            <tr>
                                <th scope="row"><?= $mhs['nim'] ?></th>
                                <td><?= $mhs['nama_mhs'] ?></td>
                                <td><?= $mhs['jk'] ?></td>
                                <td><?= $mhs['tgl_lahir'] ?></td>
                                <td><?= $mhs['no_hp'] ?></td>
                                <td><?= $mhs['kelas'] ?></td>
                                <td><img src="<?= $mhs['foto'] ?>" alt="<?= $mhs['foto'] ?>" width="50px"></td>
                                <td><?= $mhs['password'] ?></td>
                                <td><?= $mhs['status'] ?></td>
                                <td>
                                    <a href="form_edit_data.php?nim=<?= $mhs['nim'] ?>">Edit</a>
                                    <a href="hapus_data.php?nim=<?= $mhs['nim'] ?>">Delete</a>
                                </td>
                            </tr>

                        <?php endwhile; ?>
                    </tbody>
                </table>


            </div>
        </div>
    </div>













    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>