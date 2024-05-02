<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIM</th>
                    <th scope="col">ID Jadwal</th>
                    <th scope="col">Semester</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($krs as $kr) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?>.</th>
                    <td><?= $kr['nim'] ?></td>
                    <td><?= $kr['id_jadwal'] ?></td>
                    <td><?= $kr['semester'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->