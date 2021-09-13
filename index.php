<?php

include './koneksi/koneksi.php';

$data = $koneksi->query("SELECT * FROM profile");

$number = 1;
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="./assets/css//bootstrap.min.css" rel="stylesheet">

  <title>home</title>
</head>

<body>
  <div class="container py-5">
    <h2>Tampilan table profile</h2>
    <a href="insert.php" class="btn btn-primary">Tambah Data</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Phone</th>
          <th scope="col">Alamat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $data->fetch_assoc()) : ?>
        <tr>
          <th scope="row"><?php echo $number; ?></th>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td>
            <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Detail</a>
            <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">delete</a>
          </td>
        </tr>
        <?php $number++; ?>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
  <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>