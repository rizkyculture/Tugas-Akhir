<!--
Name        : Muhammad Rizky Ibrahim
Email       : rizkyculture@gmail.com
Whatsapp    : 085961412226
Github      : https://github.com/rizkyculture/
Twitter     : @rizkyculture
Instagram   : @rizkyculture
 -->
<!DOCTYPE html>
<html lang="id">

<head>
    <!-- BEGIN: Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="keywords" content="Kursus Mengemudi Magelang" />
    <meta name="url" content="https://lpk-lkpindera.com/" />
    <meta name="author" content="Muhammad Rizky Ibrahim" />
    <meta name="website" content="https://github.com/rizkyculture/" />
    <meta name="email" content="kursusindera@gmail.com" />
    <meta name="version" content="v1.0" />
    <meta name="description"
        content="Kursus mengemudi di magelang terbaik, Stir Mobil Muntilan, Stir Mobil Salaman, Stir Mobil Mertoyudan, LPK INDERA Mertoyudan, LPK INDERA Muntilan, LPK INDERA Sawitan, LPK INDERA Salaman, Kursus Mengemudi Magelang, Kursus mengemudi LPK/LKP INDERA, LPK/LKP INDERA, Kursus Mengmeudi Magelang, Kursus Stir Magelang, Belajar Mengemudi Magelang, Pembuatan SIM Magelang, Stir Mobil Jawa Tengah, Belajar Mobil Jawa Tengah, Belajar Mobil Borobudur, LPK-LKP INDERA, Tempat belajar, kursus, setir - mengemudi mobil di MAGELANG Harga murah" />
    <meta name="google-site-verification" content="Hv7NLr_W_5ZoFuvxaO_4gdpPtKhgjNjTvkz-002yoXI" />
    <meta property="og:title" content="LPK/LKP INDERA - Kursus Mengemudi Terbaik di Magelang">
    <meta property="og:locale" content="id_ID" />
    <meta property="og:site_name" content="LPK/LKP INDERA">
    <meta property="og:description"
        content="Kursus mengemudi di magelang terbaik, Stir Mobil Muntilan, Stir Mobil Salaman, Stir Mobil Mertoyudan, LPK INDERA Mertoyudan, LPK INDERA Muntilan, LPK INDERA Sawitan, LPK INDERA Salaman, Kursus Mengemudi Magelang, Kursus mengemudi LPK/LKP INDERA, LPK/LKP INDERA, Kursus Mengmeudi Magelang, Kursus Stir Magelang, Belajar Mengemudi Magelang, Pembuatan SIM Magelang, Stir Mobil Jawa Tengah, Belajar Mobil Jawa Tengah, Belajar Mobil Borobudur, LPK-LKP INDERA, Tempat belajar, kursus, setir - mengemudi mobil di MAGELANG Harga murah">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://lpk-lkpindera.com/">
    <!-- END: Meta Tag -->

    <!-- BEGIN: Title & Favicon-->
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/landing/images/favicon.ico">
    <!-- END: Title & Favicon-->

    <!-- BEGIN: File Stylesheets (CSS) -->

    <!-- CSS Lainnya -->
    <link rel="stylesheet" href="<?= base_url(); ?>/landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/landing/css/tiny-slider.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/landing/css/tobii.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/landing/css/aos.css">
    <!-- CSS Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/landing/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/landing/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- CSS Utama -->
    <link href="<?= base_url(); ?>/landing/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="<?= base_url(); ?>/landing/css/colors/default.css" rel="stylesheet" id="color-opt">
    <!-- CSS Custom -->
    <?= $this->renderSection('pageStyles') ?>

    <!-- END: File Stylesheets (CSS) -->

</head>

<body>
    <!-- BEGIN: Header, Content & Footer-->
    <?= $this->include('landing/header'); ?>

    <?= $this->renderSection('content') ?>
    <?= $this->include('landing/footer'); ?>
    <!-- END: Header, Content & Footer-->

    <!-- BEGIN:  Back to top-->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5">
        <i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
    <!-- END: Back to top-->

    <!-- BEGIN: File JavaScript (JS) -->
    <!-- JavaScript Lainnya -->
    <script src="<?= base_url(); ?>/landing/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/landing/js/tiny-slider.js "></script>
    <script src="<?= base_url(); ?>/landing/js/tobii.min.js "></script>
    <script src="<?= base_url(); ?>/landing/js/aos.js "></script>
    <script src="<?= base_url(); ?>/landing/js/parallax.js "></script>
    <script src="<?= base_url(); ?>/landing/js/shuffle.min.js "></script>
    <!-- JavaScript Icons -->
    <script src="<?= base_url(); ?>/landing/js/fontawesome.js"></script>
    <script src="<?= base_url(); ?>/landing/js/feather.min.js"></script>
    <!-- Javascript Utama -->
    <script src="<?= base_url(); ?>/landing/js/switcher.js"></script>
    <script src="<?= base_url(); ?>/landing/js/plugins.init.js"></script>
    <script src="<?= base_url(); ?>/landing/js/app.js"></script>
    <!-- JavaScript Custom -->
    <?= $this->renderSection('pageScript') ?>

    <!-- END: File JavaScript (JS) -->
</body>

</html>