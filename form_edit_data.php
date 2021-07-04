<?php
include 'koneksi.php';

session_start();
if ($_SESSION['level'] != 1) {
    header("Location: index.php?pesan=out");
}

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }

    $data = mysqli_fetch_assoc($result);
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='data_mahasiswa.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <div class="container">
        <h2>Form Edit Data Mahasiswa</h2>
    
        <table>
            <tr>
                <td>
                    <form action="proses_edit_data.php" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nim</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="<?= $data['nim'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_mhs" value="<?= $data['nama_mhs'] ?>" required>
                            </div>
                        </div>
    
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki" <?php if ($data['jk'] == 'Laki-laki') echo 'checked' ?>>
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" value="Perempuan" <?php if ($data['jk'] == 'Perempuan') echo 'checked' ?>>
                                        <label class="form-check-label" for="gridRadios2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-4 pt-0">Keterangan</legend>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="Aktif" <?php if ($data['status'] == 'Aktif') echo 'checked' ?>>
                                        <label class="form-check-label" for="gridRadios1">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="Tidak Aktif" <?php if ($data['status'] == 'Tidak Aktif') echo 'checked' ?>>
                                        <label class="form-check-label" for="gridRadios2">
                                            Tidak Aktif
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class=" form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Kelas</label>
                            <div class="col-sm-8">
                                <select class="custom-select" name="kelas">
                                    <option value="Reg-A1" <?= ($data['kelas'] == 'Reg-A1') ? "selected" : "" ?>>Reg-A1</option>
                                    <option value="Reg-A2" <?= ($data['kelas'] == 'Reg-A2') ? "selected" : "" ?>>Reg-A2</option>
                                    <option value="Reg-A4" <?= ($data['kelas'] == 'Reg-A4') ? "selected" : "" ?>>Reg-A4</option>
                                    <option value="Reg-B1" <?= ($data['kelas'] == 'Reg-B1') ? "selected" : "" ?>>Reg-B1</option>
                                    <option value="Reg-B2" <?= ($data['kelas'] == 'Reg-B2') ? "selected" : "" ?>>Reg-B2</option>
                                    <option value="Reg-B3" <?= ($data['kelas'] == 'Reg-B3') ? "selected" : "" ?>>Reg-B3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                <button class="btn btn-secondary" type="cancel" onclick="window.location='data_mahasiswa.php';return false;">Cancel</button>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
            <!-- <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" value="<?= $data['nim'] ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" value="<?= $data['nama_mhs'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki" <?php if ($data['jk'] == 'Laki-laki') echo 'checked' ?>>Laki-laki
                        <input type="radio" name="jk" value="Perempuan" <?php if ($data['jk'] == 'Perempuan') echo 'checked' ?>>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="status" value="Aktif" <?php if ($data['status'] == 'Aktif') echo 'checked' ?>>Aktif
                        <input type="radio" name="status" value="Tidak Aktif" <?php if ($data['status'] == 'Tidak Aktif') echo 'checked' ?>>Tidak Aktif
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <select name="kelas">
                            <option value="Reg-A1" <?= ($data['kelas'] == 'Reg-A1') ? "selected" : "" ?>>Reg-A1</option>
                            <option value="Reg-A2" <?= ($data['kelas'] == 'Reg-A2') ? "selected" : "" ?>>Reg-A2</option>
                            <option value="Reg-A4" <?= ($data['kelas'] == 'Reg-A4') ? "selected" : "" ?>>Reg-A4</option>
                            <option value="Reg-B1" <?= ($data['kelas'] == 'Reg-B1') ? "selected" : "" ?>>Reg-B1</option>
                            <option value="Reg-B2" <?= ($data['kelas'] == 'Reg-B2') ? "selected" : "" ?>>Reg-B2</option>
                            <option value="Reg-B3" <?= ($data['kelas'] == 'Reg-B3') ? "selected" : "" ?>>Reg-B3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="simpan" value="simpaN">
                        <button type="cancel" onclick="window.location='data_mahasiswa.php';return false;">Cancel</button>
                    </td>
                </tr> -->
        </table>
    </div>
</body>

</html>