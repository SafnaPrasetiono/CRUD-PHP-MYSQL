<?php

    $server   = 'localhost';
    $user     = 'root';
    $password = '';
    $database = 'crud';

    $koneksi = mysqli_connect($server,$user,$password,$database);

    if(!$koneksi){
        echo "KONEKSI TIDAK TERSEDIA";
    }

?>