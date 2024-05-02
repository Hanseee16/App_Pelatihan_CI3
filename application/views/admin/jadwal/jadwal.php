<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <a href="<?= base_url('admin/jadwal/tambah'); ?>" class="btn btn-primary mb-4">Tambah</a>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Ruang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($jadwal as $jd) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?>.</th>
                    <td><?= $jd['id_jadwal'] ?></td>
                    <td><?= $jd['nama_dosen'] ?></td>
                    <td><?= $jd['nama_matkul'] ?></td>
                    <td><?= $jd['waktu'] ?></td>
                    <td><?= $jd['ruang'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/jadwal/edit/') . $jd['id_jadwal']; ?>"
                            class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('admin/jadwal/hapus/') . $jd['id_jadwal']; ?>" class="btn btn-danger"
                            onclick="return confirm('Hapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->