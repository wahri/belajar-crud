<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="proses_login.php" method="post">
        <table>
            <tr>
                <td width="40%">Username</td>
                <td>: </td>
                <td><input type="text" name="username" autofocus required></td>
            </tr>
            <tr>
                <td width="40%">Password</td>
                <td>: </td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="radio" name="level" value="1">Tata Usaha <input type="radio" name="level" value="2">Mahasiswa</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Login" name="simpan"> <input type="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>