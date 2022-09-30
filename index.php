<?php
// Koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "prakweb_b_203040113");

  return $conn;
}

// Query
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);
  // pembuatan array assoc
  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Melakukan Query
$books = query("SELECT * FROM buku");

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
  <title>Zema's Store - List of Books</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-main mx-auto">
    <div class="container">
      <a href="index.php" class="fw-bold fst-italic align-middle navbar-brand">Books Store</a>
      <ul class="navbar-nav">
        <a class="nav-item nav-link page-scroll" href="php/login.php">
          <button type="button" class="btn btn-1"><i class="bi bi-box-arrow-in-right"></i> Admin Page</button>
        </a>
      </ul>
    </div>
  </nav>

  <section id="data" class="container text-center my-3 font-poppins">
    <!-- List of data -->
    <div class="row mt-3 justify-content-evenly">
      <h1 class="mb-4">List of Books</h1>
      <?php foreach ($books as $book) : ?>
        <div class="card mb-2 me-2 col-md-4">
          <div class="row my-3">
            <div class="col">
              <img src="img/<?= $book["gambar"]; ?>" alt="" width="100" class="img-fluid rounded">
            </div>
            <div class="col-7">
              <div class="card-body">
                <h5 class="card-title text-uppercase fw-bold"><?= $book["judul_buku"]; ?></h5>
                <p class="card-text"><?= $book["pengarang"]; ?>, <?= $book["tahun_terbit"]; ?></p>
                <p class="card-text text-muted"><?= $book["genre"]; ?></p>
                <a class="btn btn-2">detail...</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p class="text-center my-0 py-2 bg-main text-sec font-poppins">&copy; 2022 Raihan Anhar - 203040113</p>
  </footer>

  <!-- Script -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery-3.5.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>