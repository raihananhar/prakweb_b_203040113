<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST["tambah"])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal ditambahkan!');
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
  <title>Cheval's - Add Item</title>
</head>

<body class="bg-main">

  <!-- Add -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="card col-sm-10 col-md-8">
        <div class="card-body">
          <h4 class="card-title text-center">Add Item on Chevals</h4>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-2">
              <label for="judul_buku" class="col-form-label">Judul</label>
              <input type="text" name="judul_buku" class="form-control" placeholder="Write Judul Buku of Item" required autofocus>
            </div>
            <div class="mb-2">
              <label for="pengarang" class="col-form-label">Pengarang</label>
              <textarea type="text" name="pengarang" class="form-control" placeholder="Write The writter of Item" required></textarea>
            </div>
            <div class="mb-2">
              <label for="tahun_terbit" class="col-form-label">Tahun terbit</label>
              <input type="text" type="tahun_terbit" name="tahun_terbit" class="form-control" required>
              <p class="ms-2 text-muted">Write in numbers</p>
            </div>
            <div class="mb-2">
              <label for="gambar" class="col-form-label">Gambar</label>
              <input type="file" name="gambar" class="form-control picture" placeholder="Write Gambar Name of Item" onchange="previewImage()">
              <img src="../assets/img/blank.png" width="150" class="mt-3 d-block img-preview">
            </div>
            <div class="mb-3">
              <label for="genre" class="col-form-label">Genre</label>
              <select class="form-select" name="genre" required>
                <option disabled selected>Select the Category</option>
                <option value="Pengetahuan">Pengetahuan</option>
                <option value="Fantasi">Fantasi</option>
              </select>
            </div>
            <!-- Add & Back -->
            <button type="submit" name="tambah" class="btn btn-success">Add</button>
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