<?php

require 'koneksi.php';


$sql ="SELECT username FROM user";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
$no = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>user</title>
</head>
<body>
    <h1>data user</h1>
    <a href="user-tambah.php">tambah</a>
    <table>
        <thed>
            <th>no</th>
            <th>username</th>
        </thed>
        <?php
        foreach ($rows as $row) {
        ?>
        <tr>
            <td><?=++$no?></td>
            <td><?=$row['username']?></td>
        </tr>  
        <?php  
        }
        ?>
    </table>
</body>
</html>