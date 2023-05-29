<div style="background-image: url('/assets/img/logo.jpg');">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-card d-none d-lg-flex" style="margin-top: 30px;color:aquamarine;">
                <img class="rounded-circle" src="assets/img/logo.jpg" alt="" style="width:40px;height:40px;">
            </div>
        </a>
        <p class="text-center" style="font-size:100%;font-family:verdana;color:aliceblue;margin-top: 20px;"><b>AGENDA RAPAT</b></p>


        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() . '/dashboard'; ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Ruang Admin
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Master</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="<?= base_url() . '/listuser'; ?>">Daftar User</a>
                    <a class="collapse-item" href="/daftarruang">Daftar Ruangan</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-th"></i>
                <span>Serba Serbi Rapat</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="<?= base_url(); ?>/jadwalagenda">Jadwal Agenda</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/pideo">List Konten Video</a>
                    <a class="collapse-item" href="<?= base_url(); ?>/galeri">List Gambar</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Serba Serbi
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/livedashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Live Dashboard</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/kalendar">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Kalendar</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/listpreview">
                <i class="fas fa-fw fa-desktop"></i>
                <span>Preview Display</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="/assets/img/undraw_rocket.svg" alt="...">
            <p class="text-center mb-2"><strong>Display Meeting Room Reservation</strong> Masih dalam pengembangan</p>
            <a class="btn btn-success btn-sm" href="/priviewdisplay">Shift to Display Reservation!</a>
        </div>

    </ul>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('/assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>/"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('/assets/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('/assets/vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('/assets/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?= base_url('/assets/js/demo/chart-pie-demo.js'); ?>"></script>
    <!-- End of Sidebar -->
</div>