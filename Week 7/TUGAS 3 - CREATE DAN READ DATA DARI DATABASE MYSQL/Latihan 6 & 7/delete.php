<?php

require 'function.php';

$bpomskincare = $_GET["BPOM"];

if( hapus($bpomskincare) > 0){
    echo "
            <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php'
            </script>
        ";

} else{
    echo "
            <script>
            alert('data gagal dihapus!');
            document.location.href = 'index.php'
            </script>
        ";
}

?>