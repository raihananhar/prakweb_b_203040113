<?php
// Menghubungkan file php lain
require 'php/functions.php';

// Melakukan Query
$books = query("SELECT * FROM buku");

// ketika tombol cari ditekan
if (isset($_POST['cari'])) {
  $books = cari($_POST['keyword']);
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/icons/font/bootstrap-icons.css">
  <title>An's Store</title>
</head>

<body class="bg-1">

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-main mx-auto">
    <div class="container">
      <a href="index.php" class="fw-bold  align-middle navbar-brand">An</a>
      <ul class="navbar-nav">
        <a class="nav-item nav-link page-scroll" href="php/admin.php">
          <button type="button" class="btn btn-1"><i class="fw-bold align-middle"></i> Admin Page</button>
        </a>
      </ul>
    </div>
  </nav>

  <section id="data" class="container text-center my-3">
    <!-- List of data -->
    <div class="row mt-3 justify-content-evenly">
      <h1 class="mb-4">BOOKS PRODUCT</h1>
      <?php foreach ($books as $book) : ?>
        <div class="card me-2 mb-3 col-sm-5 col-md-5">
          <div class="row">
            <div class="col-md-4 m-2">
              <img src="../assets/img/<?= $book["gambar"]; ?>" class="img-fluid rounded" width="125px">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title"><?= $book["judul_buku"]; ?></h5>
                <p class="card-text">
                  <?= $book['genre']; ?>
                </p>
                <p class="card-text">
                  <?= $book['pengarang']; ?>,  <?= $book['tahun_terbit']; ?>
                </p>
                <p class="card-text">
                  <a class="btn btn-1 col-8 fw-bold" href="php/detail.php?id=<?= $book['id'] ?>">Detail</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p class="text-center my-0 py-2 bg-main text-sec font-poppins">&copy; Raihan Anhar 2022</p>
  </footer>

  <!-- Script -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery-3.5.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>