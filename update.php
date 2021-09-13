<?php

include './koneksi/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $data = $koneksi->query("SELECT * FROM profile WHERE id='$id'");

    if ($data->num_rows >= 1) {
        $detail = $data->fetch_assoc();
    } else {
        echo "<script>location = 'index.php'</script>";
    }
} else {
    echo "<script>location = 'index.php'</script>";
}


if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $alamat = $_POST['alamat'];

    $update = $koneksi->query("UPDATE profile SET nama='$nama', phone='$phone', alamat='$alamat' WHERE id='$id' ");

    if($update){
        echo "<script>alert('DATA BERHASIL DI UPDATE');</script>";
        echo "<script>location = 'index.php';</script>";
    }else{
        echo "<script>alert('DATA GAGAL DI UPDATE');</script>";
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

    <title>Update Data</title>
</head>

<body>
    <div class="container py-5">
        <h2>Tampilan update data</h2>
        <form method="post">
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $detail['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="nama">phone</label>
                <input type="text" name="phone" class="form-control" maxlength="12" value="<?php echo $detail['phone'] ?>">
            </div>
            <div class="mb-3">
                <label for="nama">Alamat</label>
                <textarea name="alamat" id="" cols="30" rows="3" class="form-control"><?php echo $detail['alamat'] ?></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-primary">update data</button>
        </form>
    </div>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>