<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="./" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="assets/img/logo.png" width="40px" alt="Logo">
            </span>
            <span>
                Aplikasi Arsip
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="./" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
        <!-- Forms -->
        <!-- Tables -->
        <?php if ($_SESSION['level_user'] == 'user') { ?>
            <li class="menu-item">
                <a href="index.php?page=data_tampil/index" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-folder"></i>
                    <div data-i18n="Tables">Daftar Data</div>
                </a>
            </li>
        <?php } ?>
        <?php if ($_SESSION['level_user'] == 'admin') { ?>
            <li class="menu-item">
                <a href="index.php?page=data_entry/index" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-archive-in"></i>
                    <div data-i18n="Tables">Data Entry</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="index.php?page=bidang/index" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-category"></i>
                    <div data-i18n="Tables">Bidang</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="index.php?page=dokumen/index" class="menu-link">
                    <i class="menu-icon tf-icons bx bxs-file-doc"></i>
                    <div data-i18n="Tables">Dokumen</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="index.php?page=lokasi/index" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-map"></i>
                    <div data-i18n="Tables">Lokasi</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="index.php?page=user/index" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Tables">User</div>
                </a>
            </li>
        <?php } ?>
    </ul>
</aside>
<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">
    <!-- Navbar -->

    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block"><?= $_SESSION['nama_lengkap'] ?></span>
                                        <small class="text-muted"><?= $_SESSION['level_user'] ?></small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="logout.php">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
    </nav>

    <!-- / Navbar -->


    <!-- Content wrapper -->
    <div class="content-wrapper">