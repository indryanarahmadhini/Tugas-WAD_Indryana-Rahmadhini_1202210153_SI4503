<?php

require 'Function.php';

$bpomskincare = $_GET["bpom"];

if(hapus($bpomskincare) > 0){
    echo "
            <script>
            alert('data berhasil dihapus!');
            document.location.href = 'Index.php'
            </script>
        ";

} else{
    echo "
            <script>
            alert('data gagal dihapus!');
            document.location.href = 'Index.php'
            </script>
        ";
}

?>