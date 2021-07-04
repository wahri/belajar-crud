<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DATA MAHASISWA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <div class="container">
        <h2>Form Tambah Data Mahasiswa</h2>
        <table>
            <tr>
                <td>
                    <form action="proses_tambah_data.php" method="POST">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nim</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nim" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_mhs" required>
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                                        <label class="form-check-label" for="gridRadios2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">No. HP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_hp"">
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Kelas</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" name="kelas">
                                        <option value="Reg-A1">Reg-A1</option>
                                        <option value="Reg-A2">Reg-A2</option>
                                        <option value="Reg-A4">Reg-A4</option>
                                        <option value="Reg-B1">Reg-B1</option>
                                        <option value="Reg-B2">Reg-B2</option>
                                        <option value="Reg-B3">Reg-B3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Foto</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control-file" name="foto" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-4 pt-0">Keterangan</legend>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="Aktif" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Aktif
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="Tidak Aktif">
                                            <label class="form-check-label" for="gridRadios2">
                                                Tidak Aktif
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                </div>
                            </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>