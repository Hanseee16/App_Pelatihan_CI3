<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <div class="form-group">
            <label for="kd_matkul">Kode Mata Kuliah</label>
            <input type="text" class="form-control" id="kd_matkul" name="kd_matkul"
                placeholder="Masukkan kode mata kuliah">
            <?= form_error('kd_matkul', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="sks">SKS</label>
            <input type="text" class="form-control" id="sks" name="sks" placeholder="Masukkan sks">
            <?= form_error('sks', '<small class="text-danger">', '</small>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="<?= base_url('admin/matkul'); ?>" class="btn btn-secondary">Kembali</a>

    </form>

</div>