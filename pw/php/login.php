<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // pengecekan username dan password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      //jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }

      header("location: ../index.php");
      die;
    }
  }
  $error = true;
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
  <title>Login</title>
</head>

<body class="bg-main">
  <!-- Login -->
  <section id="login">
    <div class="container">
      <div class="row my-5 justify-content-center">
        <div class="card col-sm-8 col-md-4">
          <div class="card-body">
            <h4 class="card-title text-center">Login</h4>
            <form action="" method="post">
              <?php if (isset($error)) : ?>
                <h5 class="text-danger text-center fst-italic">Username atau Password Salah!</h5>
              <?php endif; ?>
              <div class="mb-3">
                <label for="username" class="col-form-label">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Write Your Username" autofocus>
              </div>
              <div class="mb-3">
                <label for="password" class="col-form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Write Your Password">
              </div>
              <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Login</button>
              <a href="../index.php" class="mx-3 text-secondary">Back</a>
            </form>
            <!-- Registrasi -->
            <p class="card-text text-center mt-3">Belum memiliki akun? Registrasi <a href="../php/registrasi.php" class="text-decoration-none">disini</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Script -->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/jquery-3.5.1.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>