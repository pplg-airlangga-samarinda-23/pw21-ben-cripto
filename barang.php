<!DOCTYPE html>
<html lang="en">
<table>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barang</title>
<!-- <-!-- <link rel="stylesheet" href="barang.css">-->
</head>

    <body>
        <a href="barang-tambah.php">tambah</a>
        <table>
            <thead>
            <tr>
                 <th>no. </th>
                 <th>nama barang</th>
                 <th>stok</th>
                 <th>status</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $no =1;
                // while($item = mysql_fetch_assoc($rows)){
                while ($item = $rows->fetch_assoc()) {
                    ?>

                    <tr>
                        <td><?= $no; ?></td>
                        <td><?=$item["nama"]; ?></td>
                        <td><?=$item["stok"]; ?></td>
                        <td><?=$item["status"]; ?></td>
                        <td>
                          <a href="barang-edit.php?id=<?=$item['id']?>">edit</a>
                          <a href="#">hapus</a>
                        </td>
                    </tr>

                    <?php
                    $no += 1;                   
                    }
                    ?>
            </tbody>
        </table>
    </body>
</html>