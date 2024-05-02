<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <a href="<?= base_url('admin/dosen/tambah'); ?>" class="btn btn-primary mb-4">Tambah</a>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kode Dosen</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($dosen as $ds) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?>.</th>
                    <td><?= $ds['kd_dosen'] ?></td>
                    <td><?= $ds['nama'] ?></td>
                    <td><?= $ds['alamat'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/dosen/edit/') . $ds['kd_dosen']; ?>"
                            class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('admin/dosen/hapus/') . $ds['kd_dosen']; ?>" class="btn btn-danger"
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