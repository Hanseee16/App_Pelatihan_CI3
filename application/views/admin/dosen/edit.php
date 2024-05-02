<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <input type="hidden" name="kd_dosen" value="<?= $dosen['kd_dosen'] ?>">
        <div class="form-group">
            <label for="kd_dosen">Kode Dosen</label>
            <input type="text" class="form-control" id="kd_dosen" name="kd_dosen" value="<?= $dosen['kd_dosen'] ?>"
                readonly>
            <?= form_error('kd_dosen', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $dosen['nama'] ?>">
            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $dosen['alamat'] ?>">
            <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="<?= base_url('admin/dosen'); ?>" class="btn btn-secondary">Kembali</a>

    </form>

</div>