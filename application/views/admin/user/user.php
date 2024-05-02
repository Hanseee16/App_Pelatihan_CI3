<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <a href="<?= base_url('admin/user/tambah'); ?>" class="btn btn-primary mb-4">Tambah</a>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($user as $us) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?>.</th>
                    <td><?= $us['username'] ?></td>
                    <td><?= $us['password'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/user/edit/') . $us['id_user']; ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('admin/user/hapus/') . $us['id_user']; ?>" class="btn btn-danger"
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