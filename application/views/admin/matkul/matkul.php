<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <a href="<?= base_url('admin/matkul/tambah'); ?>" class="btn btn-primary mb-4">Tambah</a>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kode Mata Kuliah</th>
                    <th scope="col">Nama</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($matkul as $mk) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?>.</th>
                    <td><?= $mk['kd_matkul'] ?></td>
                    <td><?= $mk['nama'] ?></td>
                    <td><?= $mk['sks'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/matkul/edit/') . $mk['kd_matkul']; ?>"
                            class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('admin/matkul/hapus/') . $mk['kd_matkul']; ?>" class="btn btn-danger"
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