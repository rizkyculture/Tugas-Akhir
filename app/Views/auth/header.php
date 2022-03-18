<!-- BEGIN : Header -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- BEGIN : Logo -->
        <a class="logo" href="<?= base_url(); ?>">
            <img src="<?= base_url(); ?>/landing/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
            <img src="<?= base_url(); ?>/landing/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
        </a>
        <!-- END : Logo -->

        <!-- BEGIN: Mobile Menu -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- END: Mobile Menu -->

        <!-- BEGIN : Tombol Daftar -->
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                <a href="<?= site_url('register'); ?>">
                    <div class="btn btn-primary" alt="Daftar"> Daftar
                    </div>
                </a>
            </li>

            <li class="list-inline-item button mb-0 ps-1">
                <a href="<?= site_url('/admin/dashboard'); ?>">
                    <div class="btn btn-outline-primary" alt="Masuk">
                        <i class="fa-duotone fa-right-to-bracket"></i>
                    </div>
                </a>
            </li>
        </ul>
        <!-- END : Tombol Daftar -->

        <!-- BEGIN: Menu Navigation-->
        <div id="navigation">
            <ul class="navigation-menu" id="navmenu-nav">
                <li><a href="/" class="sub-menu-item">Home</a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Profil</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="<?= site_url('/tentang'); ?>" class="sub-menu-item">Tentang LPK-LKP Indera</a></li>
                        <li><a href="<?= site_url('/struktur'); ?>" class="sub-menu-item">Struktur Organisasi</a></li>
                </li>
                <li><a href="<?= site_url('/sarana-prasarana'); ?>" class="sub-menu-item">Sarana dan
                        Prasarana</a>
                </li>
                <li><a href="<?= site_url('/visi-misi'); ?>" class="sub-menu-item">Visi Misi</a>
                </li>
                <li><a href="<?= site_url('/faq'); ?>" class="sub-menu-item">FAQ</a>
            </ul>
            </li>

            <li class="has-submenu">
                <a href="<?= base_url(); ?>#layanan">Layanan</a>
            </li>
            <li class="has-submenu">
                <a href="<?= base_url(); ?>#lokasi">Lokasi</a>
            </li>
            <li class="has-submenu">
                <a href="<?= base_url(); ?>#galeri">Galeri</a>
            </li>
            <li class="has-submenu">
                <a href="<?= base_url(); ?>#kontak">Kontak</a>
            </li>
            </ul>
        </div>
        <!-- END: Menu Navigation-->
    </div>
    <!-- END: Container-->
</header>
<!-- END: Header-->