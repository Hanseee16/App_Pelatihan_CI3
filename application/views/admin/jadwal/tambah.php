<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <div class="form-group">
            <label for="kd_dosen">Dosen</label>
            <select class="form-control" id="kd_dosen" name="kd_dosen">
                <option selected>Pilih</option>
                <?php foreach ($dosen as $ds) : ?>
                <option value="<?= $ds['kd_dosen'] ?>">
                    <?= $ds['nama'] ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="kd_matkul">Mata Kuliah</label>
            <select class="form-control" id="kd_matkul" name="kd_matkul">
                <option selected>Pilih</option>
                <?php foreach ($matkul as $mk) : ?>
                <option value="<?= $mk['kd_matkul'] ?>">
                    <?= $mk['nama'] ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="waktu">Waktu</label>
            <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Masukkan waktu">
            <?= form_error('waktu', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="ruang">Ruang</label>
            <input type="text" class="form-control" id="ruang" name="ruang" placeholder="Masukkan ruang">
            <?= form_error('ruang', '<small class="text-danger">', '</small>') ?>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="<?= base_url('admin/jadwal'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>