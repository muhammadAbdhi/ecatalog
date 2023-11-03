<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center" href="<?php echo base_url('mahasiswa_c') ?>">
        <div class="sidebar-brand-icon rotate-n-15" style="margin-right: 10px;">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <marquee behavior="scroll" direction="left" scrollamount="5">
            Portal Akademik Mahasiswa
        </marquee>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-1">

    <!-- Nav Item - Data Mahasiswa -->
    <li class="nav-item <?php echo (current_url() == site_url('mahasiswa_c')) ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo base_url('mahasiswa_c') ?>">
            <i class="bi bi-people-fill"></i>
            <span>Data Mahasiswa</span>
        </a>
    </li>

    <!-- Nav Item - Perkuliahan -->
    <li class="nav-item <?php echo (current_url() == site_url('perkuliahan_c')) ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo base_url('perkuliahan_c') ?>">
            <i class="bi bi-clipboard-fill"></i>
            <span>Perkuliahan</span></a>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php echo (current_url() == site_url('dosen_c')) ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo base_url('dosen_c') ?>">
            <i class="bi bi-person-video3"></i>
            <span>Data Dosen</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?php echo (current_url() == site_url('mata_kuliah_c')) ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo base_url('mata_kuliah_c') ?>">
            <i class="bi bi-book-fill"></i>
            <span>Mata Kuliah</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->