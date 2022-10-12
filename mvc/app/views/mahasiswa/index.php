<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#forModal">
            Tambah Data Mahasiswa
        </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary text-light" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3 class="text-light">Daftar Mahasiswa</h3>
                    <ul class="list-group">
                        <?php foreach( $data['mhs'] as $mhs ) : ?>
                            <li class="list-group-item text-light">
                                <?= $mhs['nama']; ?>
                                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end me-1" onclick="return confirm('Yakin?');">Hapus</a>
                                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-success float-end me-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#forModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end me-1">Detail</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
        </div>
    </div>

</div>
<!-- modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="forModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-light" id="forModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label text-light">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nrp" class="form-label text-light">Nrp</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-light">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <select for="jurusan" class="form-select bg-rgba(255,255,255,0.2) text-black" id="jurusan" name="jurusan" aria-label="Default select example">
                <option selected>Jurusan</option>
                <option value="Teknik Industri" class="text-black">Teknik Industri</option>
                <option value="Teknik Pangan" class="text-black">Teknik Pangan</option>
                <option value="Teknik Mesin" class="text-black">Teknik Mesin</option>
                <option value="Teknik Informatika" class="text-black">Teknik Informatika</option>
                <option value="Teknik Lingkungan" class="text-black">Teknik Lingkungan</option>
                <option value="Teknik Perencanaan Wilayah dan Kota" class="text-black">Teknik Perencanaan Wilayah dan Kota</option>
            </select>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>