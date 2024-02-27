<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>moon cake</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?= base_url('elaadmin-master') ?>/QRAUqs9.png">
    <link rel="shortcut icon" href="<?= base_url('elaadmin-master') ?>/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('elaadmin-master') ?>/assets/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!--  DataTabel -->
    <link rel="stylesheet" href="<?= base_url('elaadmin-master') ?>/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('elaadmin-master') ?>/assets/css/style.css">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

    <script src="<?= base_url('elaadmin-master') ?>/assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/init/chartjs-init.js"></script>

    <script src="<?= base_url('AdminLTE') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!--  data tabel -->
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?= base_url('elaadmin-master') ?>/assets/js/init/datatables-init.js"></script>

    <!-- Auto Numeric -->
    <script src="<?= base_url('autoNumeric') ?>/src/AutoNumeric.js"></script>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="user-menu"><b>Halo!</b>
                        <p style="color :blueviolet;"><?= session()->get('nama') ?>.</p>
                    </li>

                    <li class="<?= $menu == 'dashboard' ? 'active' : '' ?>">
                        <a href="<?= base_url('Admin') ?>"><i class="menu-icon fa fa-home"></i>Dashboard </a>
                    </li>

                    <li class="menu-item-has-children dropdown <?= $menu == 'masterdata' ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-tasks"></i>Master data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('Produk') ?>" class="nav-link <?= $submenu == 'produk' ? 'active' : '' ?>">
                                        <i class="fa  fa-inbox nav-icon"></i>
                                        <p>Produk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Kategori') ?>" class="nav-link <?= $submenu == 'kategori' ? 'active' : '' ?>">
                                        <i class="ti ti-receipt nav-icon"></i>
                                        <p>Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Satuan') ?>" class="nav-link <?= $submenu == 'satuan' ? 'active' : '' ?>">
                                        <i class="ti ti-pencil-alt2 nav-icon"></i>
                                        <p>Satuan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('User') ?>" class="nav-link <?= $submenu == 'user' ? 'active' : '' ?>">
                                        <i class="fa fa-user nav-icon"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('Penjualan') ?>"><i class="menu-icon ti ti-truck"></i>Penjualan </a>
                    </li>


                    <li class="menu-item-has-children dropdown <?= $menu == 'laporan' ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-caret-right"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('Laporan/LaporanHarian') ?>" class="nav-link <?= $submenu == 'laporan-harian' ? 'active' : '' ?>">
                                        <i class="fa  fa-inbox nav-icon"></i>
                                        <p>Laporan Harian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Laporan/LaporanBulanan') ?>" class="nav-link <?= $submenu == 'laporan-bulanan' ? 'active' : '' ?>">
                                        <i class="ti ti-receipt nav-icon"></i>
                                        <p>Laporan Bulanan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('Laporan/LaporanTahunan') ?>" class="nav-link <?= $submenu == 'laporan-tahunan' ? 'active' : '' ?>">
                                        <i class="ti ti-pencil-alt2 nav-icon"></i>
                                        <p>Laporan Tahunan</p>
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-right">
                <div class="header-menu">
                    <a href="<?= base_url('Home/Logout') ?>"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <?php
                    if ($page) {
                        echo view($page);
                    }

                    ?>
                </div>
                <!-- /Widgets -->
                <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2024 Ana Nurlaelina
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->


</body>

</html>