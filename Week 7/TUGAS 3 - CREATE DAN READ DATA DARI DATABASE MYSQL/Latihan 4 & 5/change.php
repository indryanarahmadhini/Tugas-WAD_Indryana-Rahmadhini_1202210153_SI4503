<?php
require 'Function.php';

//ambil data di url

$bpomskincare = $_GET["BPOM"];

// query data skincare berdasarkan bpom
$skincare = query("SELECT * FROM skincare WHERE BPOM = '$bpomskincare'")[0];


// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){


    // cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'Index.php'
            </script>
        ";
    } else{
        echo "
            <script>
            alert('data gagal diubah!');
            document.location.href = 'Index.php'
            </script>
        ";
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Review Skincare</title>
    </head>

    <body>
        <h1>Ubah Review Skincare</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="BPOM">Ulasan Skincare</label>
                    <input type="text" name = "BPOM" id="BPOM" value="<?= $skincare['BPOM' ]?>">
                </li>
                <li>
                    <label for="Nama">Nama Skincare</label>
                    <input type="text" name = "Nama" id="Nama" required value="<?= $skincare['Nama']?>">
                </li>
                <li>
                    <label for="Gambar">Gambar Skicare</label>
                    <input type="text" name = "Gambar" id="Gambar" required value="<?= $skincare['Gambar']?>">
                </li>
                <li>
                    <label for="Jenis">Jenis Skincare</label>
                    <input type="text" name = "Jenis" id="Jenis" required value="<?= $skincare['Jenis']?>">
                </li>
                <li>
                    <label for="Rating">Rating Skincare</label>
                    <input type="text" name = "Rating" id="Rating" required value="<?= $skincare['Rating']?>">
                </li>
                <li>
                    <label for="Ulasan">Ulasan Skincare</label>
                    <input type="text" name = "Ulasan" id="Ulasan" value="<?= $skincare['Ulasan' ]?>">
    
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>

        </form>
        
    </body>
</html>