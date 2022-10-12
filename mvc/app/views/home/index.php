<div class="container mt-4">
    <div class="glass">
        <div class="container p-5 mt-4">
        <h1 class="display-4 text-light">Selamat Datang di Website saya.</h1>
        <p class="lead text-light">Halo, nama saya <?= $data['nama']; ?></p>
        <hr class="my-4 border-light">
        <p class="text-light">Jika klik button di bawah ini di arahkan pada halaman about.</p>
        <a class="btn btn-light btn-lg" href="<?= BASEURL;?>/about" role="button">About Me</a>
        </div>
    </div>
</div>