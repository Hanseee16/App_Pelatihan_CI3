<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">

        <input type="hidden" name="id_krs" value="<?= $krs['id_krs'] ?>">

        <div class="form-group">
            <label for="nim">NIM</label>
            <select class="form-control" id="nim" name="nim">
                <?php foreach ($mahasiswa as $mhs) : ?>
                <option value="<?= $mhs['nim'] ?>" <?= ($mhs['nim'] == $krs['nim']) ? 'selected' : '' ?>>
                    <?= $mhs['nim'] ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="id_jadwal">ID Jadwal</label>
            <select class="form-control" id="id_jadwal" name="id_jadwal">
                <?php foreach ($jadwal as $jd) : ?>
                <option value="<?= $jd['id_jadwal'] ?>"
                    <?= ($jd['id_jadwal'] == $krs['id_jadwal']) ? 'selected' : '' ?>>
                    <?= $jd['id_jadwal'] ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="kd_semester">Semester</label>
            <select class="form-control" id="kd_semester" name="kd_semester">
                <?php foreach ($semester as $sm) : ?>
                <option value="<?= $sm['kd_semester'] ?>"
                    <?= ($sm['kd_semester'] == $krs['kd_semester']) ? 'selected' : '' ?>>
                    <?= $sm['semester'] ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="<?= base_url('admin/krs'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>