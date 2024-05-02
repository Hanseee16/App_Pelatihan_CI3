<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <div class="form-group">
            <label for="kd_semester">Kode Semester</label>
            <input type="text" class="form-control" id="kd_semester" name="kd_semester"
                placeholder="Masukkan kode dosen">
            <?= form_error('kd_semester', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <input type="text" class="form-control" id="semester" name="semester" placeholder="Masukkan semester">
            <?= form_error('semester', '<small class="text-danger">', '</small>') ?>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="<?= base_url('admin/semester'); ?>" class="btn btn-secondary">Kembali</a>

    </form>

</div>