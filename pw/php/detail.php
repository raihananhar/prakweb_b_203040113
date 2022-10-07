<?php
//mengecek id, jika tidak ada dikembalikan ke shoe.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan Query
$books = query("SELECT * FROM buku where id = '$id'");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/icons/font/bootstrap-icons.css">
  <title>An's Libraly</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-main mx-auto">
    <div class="container">
      <a href="../index.php" class="fw-bold align-middle navbar-brand">An's Store</a>
    </div>
  </nav>

  <!-- Database -->
  <section id="detail" class="detail mt-5">
    <div class="container text-center">
      <div class="row mb-2 justify-content-around">
        <div class="col-md-3 pb-3">
          <img class="img-thumbnail" src="../assets/img/<?= $books["gambar"]; ?>">
        </div>
        <div class="col-md-5 align-self-center">
          <div class="card">
            <div class="card-body">
              <h1 class="display-6 card-title text-uppercase fw-bold"><?= $books["judul_buku"]; ?></h1>
              <p class="fw-bold"><?= $books["pengarang"]; ?></p>
              <p class="sans-serif"><?= $books["genre"]; ?></p>
              <p class="text-muted"><?= $books["tahun_terbit"]; ?></p>
              <a href="" class="btn btn-success"><i class="bi bi-cart"></i> Add to Cart</a>
            </div>
          </div>
        </div>
      </div>

      <a class="btn btn-dark" href="../index.php">Back to The List</a>
    </div>
  </section>

  <!-- Script -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery-3.5.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>