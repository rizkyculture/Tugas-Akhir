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
        <div class="buy-button">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdfFr8m_DMcfKGSVD3Nj3ZAN09O02AEEKW-j7lD55P9WlvJXw/viewform"
                target="_blank" class="btn btn-primary">Daftar</a>
        </div>
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
                        <li><a href="<?= site_url('/akreditasi'); ?>" class="sub-menu-item">Akreditasi & Perijinan</a>
                        </li>
                        <li><a href="<?= site_url('/sarana-prasarana'); ?>" class="sub-menu-item">Sarana dan
                                Prasarana</a>
                        </li>
                        <li><a href="<?= site_url('/visi-misi'); ?>" class="sub-menu-item">Visi, Misi, Motto &
                                Slogan</a>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="<?= base_url(); ?>#pelayanan">Pelayanan</a>
                </li>
                <li class="has-submenu">
                    <a href="<?= base_url(); ?>#kantor">Kantor</a>
                </li>
                <li class="has-submenu">
                    <a href="<?= base_url(); ?>#galeri">Galeri</a>
                </li>
                <li class="has-submenu">
                    <a href="<?= base_url(); ?>#testimoni">Testimoni</a>
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