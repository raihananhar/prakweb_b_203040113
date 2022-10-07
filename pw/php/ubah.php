<?php

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$books = query("SELECT * FROM buku WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/icons/font/bootstrap-icons.css">
  <title>Pesona Store - Edit Item</title>
</head>

<body class="bg-main">

  <!-- Edit -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="card col-sm-10 col-md-8">
        <div class="card-body">
          <h4 class="card-title text-center">Edit Item on An's Store</h4>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-2">
              <label for="name" class="col-form-label">Judul</label>
              <input type="text" name="name" class="form-control" placeholder="Write Name of Item" required autofocus value="<?= $books['judul_buku']; ?>">
            </div>
            <div class="mb-2">
              <label for="color" class="col-form-label">Pengarang</label>
              <textarea type="color" name="color" class="form-control" placeholder="Write The Available Color of Item" required><?= $books['pengarang']; ?></textarea>
            </div>
            <div class="mb-2">
              <label for="stok" class="col-form-label">tahun terbit</label>
              <input type="text" type="stok" name="stok" class="form-control" placeholder="How Many Items are Available?" required value="<?= $books['tahun_terbit']; ?>">
              <p class="ms-2 text-muted">Write in numbers</p>
            </div>
            <div class="mb-2">
              <input type="hidden" name="gambar" value="<?= $books['gambar']; ?>">
              <label for="gambar" class="col-form-label">Gambar</label>
              <input type="file" name="gambar" class="form-control picture" placeholder="Write gambar Name of Item" onchange="previewImage()">
              <img src="../assets/img/<?= $books['gambar']; ?>" width="150" class="mt-3 d-block img-preview">
            </div>
            <div class="mb-3">
              <label for="category" class="col-form-label">genre</label>
              <select class="form-select" name="genre" required value="<?= $books['genre']; ?>">
                <option disabled>Select the Genre</option>
                <option value="Komedi">Komedi</option>
                <option value="Pengetahuan">Pengetahuan</option>
                <option value="Fantasi">Fantasi</option>
              </select>
            </div>
            <!-- Edit & Back -->
            <button type="submit" name="ubah" class="btn btn-success">Edit</button>
            <a href="../php/admin.php" class="btn btn-dark">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/jquery-3.5.1.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>