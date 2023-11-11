<?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost","root","","review_skincare");

    // ambil data dari tabel skincare
    $result = mysqli_query($conn, "SELECT * FROM skincare");

    // if(!$result){
    //     echo mysqli_error($conn);
    // }

    // ambil data skincare (fetch) dari object result
    // mysqli_fetch_row() // mengembalikan array numerik pake angka dimulai dar 0
    // mysqli_fetch_assoc() // mengembalikan array associative tinggal tulis nama kolomnya
    // mysqli_fetch_array() // mengambalikan keduanya
    // mysqli_fetch_object() // menggunakan objek

    // while( $brg = mysqli_fetch_assoc($result)){
    //     var_dump($brg);
    // }
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
        <table cellpadding = "10" cellspacing = "0">
            <tr>
                <th>BPOM</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Jenis</th>
                <th>Rating</th>
                <th>Ulasan</th>
                <th>Aksi</th>
            </tr>

            <?php $i = 1?>
            <?php while($row = mysqli_fetch_assoc($result)) :?>

            <tr>
                <td><?= $row["BPOM"]?></td>
                <td><?= $row["Nama"]?></td>
                <td><img src="img/<?= $row["Gambar"]?>" alt="produk1" widht = "150" height = "150"></td>
                <td><?= $row["Jenis"]?></td>
                <td><?= $row["Rating"]?></td>
                <td><?= $row["Ulasan"]?></td>
                <td>
                    <a href="">Change</a> |
                    <a href="">Delete</a>
                </td>
            </tr>
            <?php $i++?> 
            <?php endwhile?>
                </td>
            </tr>
        </table>
    </body>
</html>