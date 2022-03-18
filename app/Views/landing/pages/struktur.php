<?= $this->extend('landing/layout'); ?>
<?= $this->section('content'); ?>

<!-- BEGIN Judul dan Breadcum -->
<section class="bg-half-170 bg-circle-gradiant d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h2 class="fw-bold mb-0"> Struktur Organisasi </h2>
                </div>
            </div>
        </div>
        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">LPK-LKP INDERA</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- END Judul dan Breadcum -->


<!-- BEGIN: Shape -->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- END: Shape -->

<!-- BEGIN: Struktur Organisasi -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-5 mt-4 pt-2">
                <div class="card text-center border-0">
                    <div class="position-relative">
                        <img src="<?= base_url(); ?>/landing/images/struktur.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Struktur Organisasi -->

<!-- BEGIN: Section Promo-->
<div class="container-fluid px-0">
    <div class="py-5 bg-primary bg-gradient">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="section-title">
                        <div class="d-flex">
                            <i class="fal fa-badge-percent display-4 text-white title-dark"></i>
                            <div class="flex-1 ms-md-4 ms-3">
                                <h4 class="fw-bold text-light title-dark mb-1">Dapatkan Promo Menarik Lainnya.</h4>
                                <p class="text-white-50 mb-0">Hubungi kami sekarang juga.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-4 mt-sm-0">
                    <div class="text-md-end ms-5 ms-sm-0">
                        <a href="<?= site_url('whatsapp'); ?>" class="btn btn-light me-2 me-lg-2 me-md-0 my-2"><i
                                class="fab fa-whatsapp" target="_blank"></i>
                            Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Section Promo-->

<?= $this->endSection(); ?>