<?php
require 'function.php';


// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){


    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0){
        echo "
            <script>
            alert('data yang dimasukkan berhasil ditambahkan!');
            document.location.href = 'Index.php'
            </script>
        ";
    } else{
        echo "
            <script>
            alert('data yang dimasukkan gagal ditambahkan!');
            document.location.href = 'Index.php'
            </script>
        ";
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Data Skincare</title>
    </head>

    <body>
        <h1>Tambah Data Skincare</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="bpomskincare">BPOM Skincare</label>
                    <input type="text" name = "bpomskincare" id="bpomskincare" required>
                </li>
                <li>
                    <label for="namaskincare">Nama Skincare</label>
                    <input type="text" name = "namaskincare" id="namaskincare" required>
                </li>
                <li>
                    <label for="gambarskincare">Gambar Skincare</label>
                    <input type="text" name = "gambarskincare" id="gambarskincare" required>
                </li>
                <li>
                    <label for="jenisskincare">Jenis Skincare</label>
                    <input type="text" name = "jenisskincarea" id="jenisskincare" required>
                </li>
                <li>
                    <label for="ratingskincare">Rating Skincare</label>
                    <input type="text" name = "ratingskincare" id="ratingskincare">
                </li>
                <li>
                    <label for="ulasanskincare">Ulasan Skincare</label>
                    <input type="text" name = "ulasanskincare" id="ulasanskincare">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>

        </form>
        
    </body>
</html>