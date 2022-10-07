<?php
session_start();

require 'functions.php';

$books = query("SELECT * FROM buku");

// ketika tombol cari ditekan
if (isset($_POST['cari'])) {
  $books = cari($_POST['keyword']);
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
  <title>Admin Page</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-main mx-auto">
    <div class="container">
      <a href="../index.php" type="submit" class="btn btn-dark">Kembali</a>
    </div>
  </nav>

  <!-- Admin -->
  <section id="admin" class="my-5 container justify-content-center">
    <h1 class="text-center display-5 fw-bold mb-3">An's Database</h1>

    <!-- Action Bar -->
    <form action="" method="POST" class="mb-3">
      <!-- Searching -->
      <input type="text" name="keyword" size="30" placeholder="masukkan keyword pencarian..." autocomplete="off" autofocus>
      <button type="submit" name="cari" class="btn btn-secondary">Search</button>
      <!-- add -->
      <a href="../php/tambah.php" class="btn btn-success float-sm-end"><i class="bi bi-plus-circle"></i> Add Item</a>
    </form>

    <!-- tabel database -->
    <table class="table table-sm align-middle table-bordered table-striped table-hover text-center">
      <thead>
        <th scope="col">No.</th>
        <th scope="col">Aksi</th>
        <th scope="col">Gambar</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Genre</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Tahun Terbit</th>
      </thead>

      <!-- Tampilan Pencarian -->
      <?php if (empty($books)) : ?>
        <tr>
          <td colspan="7">
            <h1 style="color: red;">Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php endif; ?>

      <?php $no = 1; ?>
      <?php foreach ($books as $book) : ?>
        <tbody>
          <td><?= $no; ?></td>
          <td class="text-center col-1">
            <!-- button edit -->
            <a href="ubah.php?id=<?= $book['id']; ?>" class="btn btn-sm btn-outline-success m-1"><i class="bi bi-pencil-square d-md-block d-sm-none"></i> Edit</a>
            <!-- button delete -->
            <a href="hapus.php?id=<?= $book['id']; ?>" class="delete btn btn-sm btn-outline-danger" onclick="return confirm('Delete This?')"><i class="bi bi-trash d-md-block d-sm-none"></i> Delete</a>
          </td>
          <td class="col-3">
            <img class="m-1" src="../assets/img/<?= $book['gambar']; ?>" width="100px">
          </td>
          <td class="fw-bold text-uppercase col-2"><?= $book['judul_buku']; ?></td>
          <td class="col-2"><?= $book['genre']; ?></td>
          <td class="fw text-uppercase"><?= $book['pengarang']; ?></td>
          <td class="fw-bold text-secondary"><?= $book['tahun_terbit']; ?></td>
        </tbody>
        <?php $no++; ?>
      <?php endforeach; ?>
    </table>
  </section>

  <!-- Script -->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/jquery-3.5.1.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>