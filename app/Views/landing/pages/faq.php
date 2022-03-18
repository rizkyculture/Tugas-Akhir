<?= $this->extend('landing/layout'); ?>
<?= $this->section('content'); ?>

<!-- BEGIN Judul dan Breadcum -->
<section class="bg-half-170 bg-circle-gradiant d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h2 class="fw-bold mb-0"> Frequently Asked Questions </h2>
                </div>
            </div>
        </div>
        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">LPK-LKP INDERA</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
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

<!-- BEGIN: FAQ -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col mt-4 pt-2" id="nav-tabs">
                <div class="component-wrapper rounded shadow">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- BEGIN: Nav Pills -->
                                <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab"
                                    role="tablist">
                                    <!-- BEGIN: Populer -->
                                    <li class="nav-item">
                                        <a class="nav-link rounded active" id="pills-populer-tab" data-bs-toggle="pill"
                                            href="#pills-populer" role="tab" aria-controls="pills-populer"
                                            aria-selected="true">
                                            <div class="text-center py-2">
                                                <h6 class="mb-0">Populer</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- END: Populer -->

                                    <!-- BEGIN: Lokasi -->
                                    <li class="nav-item" style="width: auto; margin-right: 20px; margin-left: 20px">
                                        <a class="nav-link rounded" id="pills-lokasi-tab" data-bs-toggle="pill"
                                            href="#pills-lokasi" role="tab" aria-controls="pills-lokasi"
                                            aria-selected="false">
                                            <div class="text-center py-2">
                                                <h6 class="mb-0">Lokasi</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- END: Lokasi -->

                                    <!-- BEGIN: Akreditasi -->
                                    <li class="nav-item">
                                        <a class="nav-link rounded" id="pills-akreditasi-tab" data-bs-toggle="pill"
                                            href="#pills-akreditasi" role="tab" aria-controls="pills-akreditasi"
                                            aria-selected="false">
                                            <div class="text-center py-2">
                                                <h6 class="mb-0">Akreditasi</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- END: Akreditasi -->
                                </ul>
                                <!-- END: Nav Pills -->
                            </div>
                        </div>

                        <!-- BEGIN: Tab Panel -->
                        <div class="row pt-2">
                            <div class="col-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <!-- BEGIN: Populer Panel -->
                                    <div class="tab-pane fade active show" id="pills-populer" role="tabpanel"
                                        aria-labelledby="pills-populer-tab">
                                        <div class="row">
                                            <div class="col-12 mt-4 pt-2">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item rounded">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="fw-bold accordion-button border-0 bg-light"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Apakah biaya pelatihan dapat diangsur?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne"
                                                            class="accordion-collapse border-0 collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body text-dark bg-white">
                                                                <p class="answer text-muted mb-0">Sangat bisa! biaya
                                                                    pelatihan dapat diangsur sesuai
                                                                    ketentuan. </p>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item rounded mt-2">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button
                                                                    class="fw-bold accordion-button border-0 bg-light collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    Apakah siswa saat pelatihan akan digabung ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo"
                                                                class="accordion-collapse border-0 collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body text-dark bg-white">
                                                                    <p class="answer text-muted mb-0">Tidak, siswa
                                                                        latihan hanya ada 1 di dalam mobil bersama
                                                                        instruktur, <br> <span class="fw-bold">1 Siswa =
                                                                            1 Mobil</span>.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item rounded mt-2">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button
                                                                    class="fw-bold accordion-button border-0 bg-light collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree"
                                                                    aria-expanded="false" aria-controls="collapseThree">
                                                                    Apakah bisa memilih jadwal sendiri?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree"
                                                                class="accordion-collapse border-0 collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body text-muted bg-white">
                                                                    <p class="answer text-muted mb-0">Tentu saja bisa.
                                                                        Jadwal pelatihan ditentukan oleh siswa sendiri
                                                                        disesuaikan dengan paket yang diambil dan jadwal
                                                                        yang sudah ada.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item rounded mt-2">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button
                                                                    class="fw-bold accordion-button border-0 bg-light collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFour" aria-expanded="false"
                                                                    aria-controls="collapseFour">
                                                                    Apakah boleh mengajak seseorang pada saat pelatihan?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour"
                                                                class="accordion-collapse border-0 collapse"
                                                                aria-labelledby="headingFour"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body text-muted bg-white">
                                                                    <p class="answer text-muted mb-0">Demi keamanan
                                                                        bersama, tidak diperkenankan karena dapat
                                                                        mengganggu konsentrasi siswa maupun instruktur
                                                                        saat mengajar.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Populer Panel -->

                                    <!-- BEGIN: Lokasi Panel -->
                                    <div class="tab-pane fade" id="pills-lokasi" role="tabpanel"
                                        aria-labelledby="pills-lokasi-tab">
                                        <div class="row">
                                            <div class="col-12 mt-4 pt-2">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item rounded">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="fw-bold accordion-button border-0 bg-light"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Kantor Muntilan
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne"
                                                            class="accordion-collapse border-0 collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body text-dark bg-white">
                                                                <h6 class="mb-0">Telepon :</h6>
                                                                <p class="para text-muted">
                                                                    <a href="tel:+6282137136565"
                                                                        class="text-muted">0293-587609</a>
                                                                </p>

                                                                <h6 class="mb-0">Whatsapp :</h6>
                                                                <p class="para text-muted">
                                                                    <a href="https://wa.me/6282226213111"
                                                                        class="text-muted">0822-2621-3111</a>
                                                                    <br>
                                                                    <a href="https://wa.me/6281225539991"
                                                                        class="text-muted">0812-2553-9991</a>
                                                                </p>
                                                                <h6 class="mb-0">Alamat :</h6>
                                                                <p class="para mb-0">
                                                                    <a href="https://goo.gl/maps/fch57TxS7xSbMGtw6"
                                                                        class="text-muted">
                                                                        Jl. Bakalan No.04, Kec. Muntilan, Kab.
                                                                        Magelang, Jawa Tengah 56413
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item rounded mt-2">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button
                                                                    class="fw-bold accordion-button border-0 bg-light collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    Kantor Sawitan
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo"
                                                                class="accordion-collapse border-0 collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body text-dark bg-white">
                                                                    <h6 class="mb-0">Telepon :</h6>
                                                                    <p class="para text-muted">
                                                                        <a href="tel:+6281216637989"
                                                                            class="text-muted">0812-1663-7989</a>
                                                                    </p>

                                                                    <h6 class="mb-0">Whatsapp :</h6>
                                                                    <p class="para text-muted">
                                                                        <a href="https://wa.me/6281216637989"
                                                                            class="text-muted">0812-1663-7989</a>
                                                                    </p>
                                                                    <h6 class="mb-0">Alamat :</h6>
                                                                    <p class="para mb-0">
                                                                        <a href="https://goo.gl/maps/2yGUZnWaxrZG82DR7"
                                                                            class="text-muted">
                                                                            Jl. Soekarno Hatta, Ngentan I, Sawitan,
                                                                            Mungkid, Jawa Tengah 56511
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item rounded mt-2">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button
                                                                    class="fw-bold accordion-button border-0 bg-light collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree"
                                                                    aria-expanded="false" aria-controls="collapseThree">
                                                                    Kantor Salaman
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree"
                                                                class="accordion-collapse border-0 collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body text-muted bg-white">
                                                                    <h6 class="mb-0">Telepon :</h6>
                                                                    <p class="para text-muted">
                                                                        <a href="tel:+6281390204355"
                                                                            class="text-muted">0813-9020-4355</a>
                                                                    </p>
                                                                    <h6 class="mb-0">Whatsapp :</h6>
                                                                    <p class="para text-muted">
                                                                        <a href="https://wa.me/6281390204355"
                                                                            class="text-muted">0813-9020-4355</a>
                                                                    </p>
                                                                    <h6 class="mb-0">Alamat :</h6>
                                                                    <p class="para mb-0">
                                                                        <a href="https://goo.gl/maps/EzZAwjy7YVrYvePR7"
                                                                            class="text-muted">
                                                                            Jl. Magelang, Sawah, Sidomulyo, Kec.
                                                                            Salaman, Jawa Tengah 56162
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item rounded mt-2">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button
                                                                    class="fw-bold accordion-button border-0 bg-light collapsed type="
                                                                    button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFour" aria-expanded="false"
                                                                    aria-controls="collapseFour">
                                                                    Kantor Mertoyudan
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour"
                                                                class="accordion-collapse border-0 collapse"
                                                                aria-labelledby="headingFour"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body text-muted bg-white">
                                                                    <h6 class="mb-0">Telepon :</h6>
                                                                    <p class="para text-muted">
                                                                        <a href="tel:+6282326279991"
                                                                            class="text-muted">0823-2627-9991</a>
                                                                    </p>
                                                                    <h6 class="mb-0">Whatsapp :</h6>
                                                                    <p class="para text-muted">
                                                                        <a href="https://wa.me/6282326279991"
                                                                            class="text-muted">0823-2627-9991</a>
                                                                    </p>
                                                                    <h6 class="mb-0">Alamat :</h6>
                                                                    <p class="para mb-0">
                                                                        <a href="https://goo.gl/maps/HFuk6z5woANFfXY59"
                                                                            class="text-muted">
                                                                            Jl. Magelang, Sumberrejo, Kec. Mertoyudan,
                                                                            Jawa Tengah 56172
                                                                        </a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div>
                                    <!-- END: Lokasi Panel -->

                                    <!-- BEGIN: Akreditasi Panel -->
                                    <div class="tab-pane fade" id="pills-akreditasi" role="tabpanel"
                                        aria-labelledby="pills-akreditasi-tab">
                                        <div class="row">
                                            <div class="col-12 mt-4 pt-2">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item rounded">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="fw-bold accordion-button border-0 bg-light"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Status Akreditasi
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne"
                                                            class="accordion-collapse border-0 collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body text-dark bg-white">
                                                                <span class="fw-bold">BAN PAUD dan PNF</span>
                                                                <span class="text-muted fw-bold">(Badan Akreditasi
                                                                    Nasional)</span>
                                                                <br>
                                                                <span class="text-primary fw-bold">Nomor :
                                                                    LKP/3308/0002/12/2018</span>
                                                                <br class="mb-1">
                                                                <span class="fw-bold">LA-LPK</span>
                                                                <span class="text-muted fw-bold">(Dinas Tenaga
                                                                    Kerja)</span>
                                                                <br>
                                                                <span class="text-primary fw-bold">Nomor :
                                                                    646/LA-LPK/XII/2020</span>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item rounded mt-2">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button
                                                                    class="fw-bold accordion-button border-0 bg-light collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    Ijin Usaha
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo"
                                                                class="accordion-collapse border-0 collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body text-dark bg-white">
                                                                    <span class="fw-bold">DISPERINAKER</span>
                                                                    <span class="text-muted fw-bold">(Dinas
                                                                        Perindustrian dan Tenaga Kerja)</span>
                                                                    <br>
                                                                    <span class="text-primary fw-bold">Nomor :
                                                                        188.4/069/10/2018</span>
                                                                    <br class="mb-1">
                                                                    <span class="fw-bold">NOMOR INDUK BERUSAHA</span>
                                                                    <span class="text-muted fw-bold">(NIB)</span>
                                                                    <br>
                                                                    <span class="text-primary fw-bold">Nomor :
                                                                        9120207400417</span>
                                                                    <br class="mb-1">
                                                                    <span class="fw-bold">KEMENKUMHAM RI</span>
                                                                    <span class="text-muted fw-bold">(Kementerian Hukum
                                                                        dan Hak Asasi Manusia)</span>
                                                                    <br>
                                                                    <span class="text-primary fw-bold">Nomor : AHU
                                                                        0003322.AH.0107 2015</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item rounded mt-2">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button
                                                                    class="fw-bold accordion-button border-0 bg-light collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree"
                                                                    aria-expanded="false" aria-controls="collapseThree">
                                                                    Kurikulum Pelatihan
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree"
                                                                class="accordion-collapse border-0 collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body text-muted bg-white">
                                                                    <span class="fw-bold text-primary">- KKNI</span>
                                                                    <span class="text-muted fw-bold">(Kerangka
                                                                        Kualifikasi Nasional Indonesia)</span>
                                                                    <br class="mb-1">
                                                                    <span class="fw-bold text-primary">- SKKNI</span>
                                                                    <span class="text-muted fw-bold">(Standar Kompetensi
                                                                        Kerja Nasional Indonesia)</span>
                                                                    <br class="mb-1">
                                                                    <span class="fw-bold text-primary">- Standarisasi
                                                                        Sekolah Mengemudi</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                    </div>
                                    <!-- END: Akreditasi Panel -->
                                </div>
                            </div>
                        </div>
                        <!-- END: Tab Panel -->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END: FAQ -->

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