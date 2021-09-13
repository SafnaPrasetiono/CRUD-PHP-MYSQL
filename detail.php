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

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="./assets/css//bootstrap.min.css" rel="stylesheet">

    <title>Detail Data</title>
</head>

<body>
    <div class="container py-5">
        <h2>Tampilan detail data</h2>
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $detail['nama'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nama">phone</label>
            <input type="text" name="phone" class="form-control" maxlength="12" value="<?php echo $detail['phone'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nama">Alamat</label>
            <textarea name="alamat" id="" cols="30" rows="3" class="form-control" readonly><?php echo $detail['alamat'] ?></textarea>
        </div>
    </div>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>