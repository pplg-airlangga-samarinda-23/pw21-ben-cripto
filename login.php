<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
</head>
<body>
    <h1>login</h1>
    <form action="" method="post">
        <div class="form-item">
            <label for="username">username</label>
            <input type="text" name="usermane" id="username">
        </div>
        <div class="form-item">
            <label for="password">password</label> 
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">login</button>

    </form>
</body>
</html>


<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
    $username = $_POST['username'];
    $username = $_POST['password'];
    if ($password == $row['password']) {
        session_start();
        $_SESSION["username"] = $row["username"];
        header("location:barang.php");
    }

    $sql = "SELECT password FROM user WHERE username = ?";
    $row = $koneksi->execute_query($sql, [$username])->fetch_assoc();

    if ($password == $row['password']) {
        header('location:barang.php');
    } else {

    }
}
?>