<!-- BEGIN: Body-->

<body class="pace-done vertical-layout navbar-floating footer-static vertical-menu-modern menu-expanded" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">John Doe</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="<?= base_url(); ?>assets/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="#"><i class="me-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="<?= base_url(); ?>assets/starter-kit/ltr/vertical-collapsed-menu-template/">
                        <span class="brand-logo">
                            <img src="<?= base_url(); ?>assets/app-assets/images/ico/logo_unsub_baru.png" alt="">
                        </span>
                            <h2 class="brand-text">SIJAMU</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= $this->uri->segment(1) == '' || $this->uri->segment(2) == '' ? 'active' : '' ?> nav-item"><a class="d-flex align-items-center" href="<?= base_url(); ?>admin"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home">Home</span></a>
                </li>
                <li class="<?= $this->uri->segment(2) == 'penetapan' ? 'active' : '' ?> nav-item"><a class="d-flex align-items-center" href="<?= base_url(); ?>admin/penetapan"><i data-feather="list"></i><span class="menu-title text-truncate" data-i18n="Penetapan">Penetapan</span></a>
                </li>
                <li class="<?= $this->uri->segment(2) == 'pelaksanaan' ? 'active' : '' ?> nav-item"><a class="d-flex align-items-center" href="<?= base_url(); ?>admin/pelaksanaan"><i data-feather="book-open"></i><span class="menu-title text-truncate" data-i18n="Pelaksanaan">Pelaksanaan</span></a>
                </li>
                <li class="<?= $this->uri->segment(2) == 'evaluasi' ? 'active' : '' ?> nav-item"><a class="d-flex align-items-center" href="<?= base_url(); ?>admin/evaluasi"><i data-feather="clipboard"></i><span class="menu-title text-truncate" data-i18n="Evaluasi">Evaluasi</span></a>
                </li>
                <li class="<?= $this->uri->segment(2) == 'pengendalian' ? 'active' : '' ?> nav-item"><a class="d-flex align-items-center" href="<?= base_url(); ?>admin/pengendalian"><i data-feather="refresh-cw"></i><span class="menu-title text-truncate" data-i18n="Pengendalian">Pengendalian</span></a>
                </li>
                <li class="<?= $this->uri->segment(2) == 'peningkatan' ? 'active' : '' ?> nav-item"><a class="d-flex align-items-center" href="<?= base_url(); ?>admin/peningkatan"><i data-feather="trending-up"></i><span class="menu-title text-truncate" data-i18n="Peningkatan">Peningkatan</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->