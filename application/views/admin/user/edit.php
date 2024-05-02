<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">

        <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
            <?= form_error('username', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?= $user['password'] ?>">
            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="<?= base_url('admin/user'); ?>" class="btn btn-secondary">Kembali</a>

    </form>

</div>