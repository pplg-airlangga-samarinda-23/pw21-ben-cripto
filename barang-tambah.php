<?php
require "config/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $stok = $_POST["stok"];
    $status = $_POST["status"];

    $sql = "INSERT INTO barang (nama, stok, status) values (?, ?, ?)";
    // PHP 8.2
    $row = $koneksi -->execute_query($sql, [$nama, $stok, $status]);


    header("location:barang.php")
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>tambah barang</title>
</head>
<body>
    <h1 style="font-size:large;">tambah barang</h1>
    <from action="" method="post">
        <div class="form-item">
            <label for="nama">nama barang</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div class="form-item">
            <label for="status">status</label>
            <select mane="status" id="status>
                <option value="" disabled selected>pilih status barang</select>
                <option value="baik">baik</option>
                <option value="rusak">rusak</option>
            </select>   
        </div>
        <button type="submit">submit</button>
    </from>
    <a href="barang.php">kembali</a>
</body>
</html>

