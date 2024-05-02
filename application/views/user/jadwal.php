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
                    <th scope="col">ID</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Ruang</th>
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
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->