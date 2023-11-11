<?php
    // Koneksi ke database
    require 'function.php';
    $skincare = query("SELECT * FROM skincare");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tugas WAD Pertemuan 7</title>
        <style>
        table, th, td {
             border: 3px solid black;
             border-collapse : collapse;
            }
        th,td{
            text-align: center
        }
        </style>
    </head>
<!-- Latihan 1 Buat tabel barang yang terkoneksi dengan database -->
    <body>
        <h1>Review Skincare</h1>

        <a href="add.php">Tambah Review Skincare</a>
        <br><br>

        
        <table cellpadding = "15" cellspacing = "0">
            <tr>
                <th>BPOM</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Jenis</th>
                <th>Rating</th>
                <th>Ulasan</th>
                <th>Aksi</th>
            </tr>

            <?php $i= 1; ?>
            <?php foreach($skincare as $row) :?>

            <tr>
                <td><?= $row["BPOM"]?></td>
                <td><?= $row["Nama"]?></td>
                <td><img src="img/<?= $row["Gambar"]?>" alt="produk1" widht = "150" height = "150"></td>
                <td><?= $row["Jenis"]?></td>
                <td><?= $row["Rating"]?></td>
                <td><?= $row["Ulasan"]?></td>
                <td>
                    <a href="">Change</a> |
                    <a href="delete.php?BPOM=<?= $row["BPOM"]?>">Delete</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach?>

                </td>
            </tr>
        </table>

        
    </body>
</html>