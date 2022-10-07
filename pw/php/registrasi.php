<?php
require 'functions.php';

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil, Silakan Login!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal!');
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
  <title>Registrasi</title>
</head>

<body class="bg-main">

  <!-- Registrasi -->
  <section id="registrasi">
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="card col-sm-8 col-md-4">
          <div class="card-body">
            <h4 class="card-title text-center">Registrasi</h4>
            <form action="" method="post">
              <div class="mb-3">
                <label for="username" class="col-form-label">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Write Your Username" autofocus autocomplete="off" required>
              </div>
              <div class="mb-3">
                <label for="password1" class="col-form-label">Password</label>
                <input type="password" class="form-control" name="password1" placeholder="Write Your Password" required>
              </div>
              <div class="mb-3">
                <label for="password2" class="col-form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" name="password2" placeholder="Confirm Your Password" required>
              </div>
              <button type="submit" name="register" class="btn btn-primary">Register</button>
              <a href="../index.php" class="mx-3 text-secondary">Back</a>
            </form>
            <!-- Login -->
            <p class="card-text text-center mt-3">Sudah memiliki akun? Login <a href="../php/login.php" class="text-decoration-none">disini</a></p>
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