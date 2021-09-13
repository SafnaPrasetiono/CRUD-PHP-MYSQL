<?php

    include './koneksi/koneksi.php';

    $id = $_GET['id'];

    $cekid = $koneksi->query("SELECT * FROM profile WHERE id='$id'");

    if($cekid->num_rows >= 1){
        $delete = $koneksi->query("DELETE FROM profile WHERE id='$id'");

        if($delete){
            echo "<script>alert('DATA BERHASIL DI HAPUS');</script>";
            echo "<script>location = 'index.php';</script>";
        }else{
            echo "<script>alert('DATA TIDAK TERHAPUS');</script>";
            echo "<script>location = 'index.php';</script>";
        }
    }else{
        echo "<script>alert('DATA TIDAK TERHAPUS KARNA ID TIDAK TERSEDIA');</script>";
        echo "<script>location = 'index.php';</script>";
    }

    

?>