<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">

        <div class="form-group">
            <label for="nim">NIM</label>
            <select class="form-control" id="nim" name="nim">
                <option selected>Pilih</option>
                <?php foreach ($mahasiswa as $mhs) : ?>
                <option value="<?= $mhs['nim'] ?>">
                    <?= $mhs['nim'] ?>
                </option>
                <?php endforeach; ?>
            </select>
            <?= form_error('nim', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="id_jadwal">ID Jadwal</label>
            <select class="form-control" id="id_jadwal" name="id_jadwal">
                <option selected>Pilih</option>
                <?php foreach ($jadwal as $jd) : ?>
                <option value="<?= $jd['id_jadwal'] ?>">
                    <?= $jd['id_jadwal'] ?>
                </option>
                <?php endforeach; ?>
            </select>
            <?= form_error('id_jadwal', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="kd_semester">Semester</label>
            <select class="form-control" id="kd_semester" name="kd_semester">
                <option selected>Pilih</option>
                <?php foreach ($semester as $sm) : ?>
                <option value="<?= $sm['kd_semester'] ?>">
                    <?= $sm['semester'] ?>
                </option>
                <?php endforeach; ?>
            </select>
            <?= form_error('kd_semester', '<small class="text-danger">', '</small>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="<?= base_url('admin/krs'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>