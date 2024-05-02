<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <a href="<?= base_url('admin/semester/tambah'); ?>" class="btn btn-primary mb-4">Tambah</a>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kode Semester</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($semester as $sm) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?>.</th>
                    <td><?= $sm['kd_semester'] ?></td>
                    <td><?= $sm['semester'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/semester/edit/') . $sm['kd_semester']; ?>"
                            class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('admin/semester/hapus/') . $sm['kd_semester']; ?>" class="btn btn-danger"
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