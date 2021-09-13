<?php

    include './koneksi/koneksi.php';

    if(isset($_POST['save'])){
        $nama = $_POST['nama'];
        $phone = $_POST['phone'];
        $alamat = $_POST['alamat'];

        $save = $koneksi->query("INSERT INTO profile(nama,phone,alamat) VALUES('$nama','$phone','$alamat')");

        if($save){
            echo "<script>alert('DATA BERHASIL DI SIMPAN');</script>";
        }else{
            echo "<script>alert('DATA GAGAL DI SIMPAN');</script>";
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="./assets/css//bootstrap.min.css" rel="stylesheet">

    <title>tambah data</title>
  </head>
  <body>
    <div class="container py-5">
        <h2>Tampilan tambah data profile</h2>
        <form method="post">
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nama">phone</label>
                <input type="text" name="phone" class="form-control" maxlength="12">
            </div>
            <div class="mb-3">
                <label for="nama">Alamat</label>
                <textarea name="alamat" id="" cols="30" rows="3" class="form-control"></textarea>
            </div>
            <button type="submit" name="save" class="btn btn-primary">Save Data</button>
        </form>
    </div>
    <script src="./assets/js/bootstrap.min.js"></script>
  </body>
</html>