<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan nim">
            <?= form_error('nim', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
            <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan jurusan">
            <?= form_error('jurusan', '<small class="text-danger">', '</small>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="<?= base_url('admin/mahasiswa'); ?>" class="btn btn-secondary">Kembali</a>

    </form>

</div>