<?php
require "koneksi.php";

$sql = "SELECT * FROM barang";

$rows = $koneksi->execute_query($sql,[]);
?>

<table>
    <thead>
        <tr>
            <th>no.</th>
            <th>nama barang</th>
            <th>stok</th>
            <th>status</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($item = $rows->fectch_assoc()){
            ?>

            <tr>
                <td><?= $no;  ?></td>
                <td><?= $item["nama"]; ?></td>
                <td><?= $item["stok"]; ?></td>
                <td><?= $item["status"]; ?></td>
                <td>
                    <a href="#">edit</a>
                    <a href="#">hapus</a>
                </td>
            </tr>

            <?php
            $no += 1;
        }
    </tbody>
</table>
