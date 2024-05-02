<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="<?= base_url('admin/dashboard'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li
        class="nav-item <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'dashboard') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li
        class="nav-item <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'dosen') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin/dosen'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Dosen</span></a>
    </li>

    <li
        class="nav-item <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'mahasiswa') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin/mahasiswa'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Mahasiswa</span></a>
    </li>

    <li
        class="nav-item <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'semester') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin/semester'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Semester</span></a>
    </li>

    <li
        class="nav-item <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'matkul') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin/matkul'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Mata Kuliah</span></a>
    </li>

    <li
        class="nav-item <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'jadwal') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin/jadwal'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Jadwal</span></a>
    </li>

    <li
        class="nav-item <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'krs') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin/krs'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data KRS</span></a>
    </li>

    <li
        class="nav-item <?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'user') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url('admin/user'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->