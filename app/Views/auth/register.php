<?= $this->extend('auth/layout'); ?>
<?= $this->Section('content'); ?>

<section class="bg-auth-home bg-circle-gradiant d-table w-100">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow rounded border-0 mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-center"><?= lang('Auth.registerTitle') ?></h4>
                        <p class="card-text text-center mb-2"><?= lang('Auth.registerText') ?></p>
                        <?= view('auth/_message_block') ?>

                        <form class="login-form mt-4" action="<?= route_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <!-- BEGIN: Email dan Username -->
                            <div class="row">
                                <!-- BEGIN: Form Email  -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><?= lang('Auth.emailAddress') ?>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-envelope icon-sm icons"></i>
                                            <input type="email" name="email"
                                                class="form-control ps-5 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.enterEmail') ?>" value="<?= old('email') ?>"
                                                autofocus>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Form Email -->

                                <!-- BEGIN: Username -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><?= lang('Auth.username') ?>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-user icon-sm icons"></i>
                                            <input type="text" name="username"
                                                class="form-control ps-5 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.username') ?>"
                                                value="<?= old('username') ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Form Username -->
                            </div>
                            <!-- END: Email dan Password -->

                            <!-- BEGIN: Password dan Konfirmasi Password -->
                            <div class="row">
                                <!-- BEGIN: Password -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"><?= lang('Auth.password') ?>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-key icon-sm icons"></i>
                                            <input type="password" name="password" id="inputPassword"
                                                class="form-control ps-5 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.enterPassword') ?>"
                                                value="<?= old('password') ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Password -->

                                <!-- BEGIN: Konfirmasi Password -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="pass_confirm"><?= lang('Auth.repeatPassword') ?>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-key icon-sm icons"></i>
                                            <input type="password" name="pass_confirm" id="inputPassword"
                                                class="form-control ps-5 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.enterRepeat') ?>"
                                                value="<?= old('pass_confirm') ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Konfirmasi Password -->
                            </div>
                            <!-- END: Password dan Konfirmasi Password -->


                            <!-- BEGIN: Kebijakan Privas & Tombol Daftar -->
                            <div class="row mb-10">
                                <!-- BEGIN: Peraturan Pengguna & Kebijakan Privasi -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" required>
                                            <label class="form-check-label" for="flexCheckDefault">Saya setuju dengan
                                                <a data-bs-toggle="modal" data-bs-target="#terms" href="#"
                                                    class="text-primary">Peraturan Pengguna</a> & <a
                                                    data-bs-toggle="modal" data-bs-target="#privacy" href="#"
                                                    class="text-primary">Kebijakan
                                                    Privasi</a></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Peraturan Pengguna & Kebijakan Privasi -->

                                <!-- BEGIN: Tombol Daftar -->
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="submit"
                                            class="btn btn-pills btn-primary"><?= lang('Auth.registerTitle') ?></button>
                                    </div>
                                </div>
                                <!-- END: Tombol Daftar -->
                                <div class="row mb-10 text-center">
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small
                                                class="text-dark me-1"><?= lang('Auth.alreadyRegistered'); ?></small><a
                                                href="<?= route_to('login') ?>"
                                                class="text-primary fw-bold"><?= lang('Auth.signIn'); ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Kebijakan Privas & Tombol Daftar -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BEGIN: Modal Peraturan Pengguna -->
<div class="modal fade" id="terms" tabindex="-1" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fw-bolder" id="privacyLabel">Kebijakan Privasi</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-10 px-lg-17">
                <div class="row">
                    <div class="col">
                        <p>Saya setuju dengan peraturan pengguna. Dan dengan ini, saya memastikan bahwa data yang
                            diinput sudah sesuai dengan data Identitas. Segala kesalahan menjadi tanggung jawab pribadi.
                        </p>
                    </div>
                </div>

            </div>
            <div class="modal-footer flex-center">
                <button type="button" class="btn btn-pills btn-light w-100 text-uppercase me-3"
                    data-bs-dismiss="modal"><i class="fa-duotone fa-xmark"></i> Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Peraturan Pengguna -->

<!-- BEGIN: Modal Kebijakan Privasi -->
<div class="modal fade" id="privacy" tabindex="-1" aria-labelledby="privacyLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fw-bolder" id="privacyLabel">Kebijakan Privasi</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-10 px-lg-17">
                <div class="row">
                    <div class="col">
                        <p class="text-justify">Di situs Kursus Mengemudi Indera, dapat diakses melalui
                            <a href="<?= site_url(''); ?>">lpk-lkpindera.com</a>, privasi
                            pengunjung menjadi prioritas utama kami. Dokumen Kebijakan Privasi berisikan jenis informasi
                            yang dikumpulkan dan dicatat oleh Kursus Mengemudi Indera dan bagaimana kami menggunakannya.
                        </p>

                        <p class="text-justify">Jika Anda memiliki pertanyaan atau memerlukan informasi lebih lanjut
                            tentang
                            Kebijakan Privasi kami, jangan ragu untuk menghubungi kami.</p>
                        <p><strong>Arsip Tercatat</strong></p>
                        <p class="text-justify">Kursus Mengemudi Indera mengikuti prosedur standar penggunaan arsip yang
                            tercatat.
                            Arsip-arsip ini mencatat pengunjung ketika mereka mengunjungi Kursus Mengemudi Indera.
                            Informasi
                            yang
                            dikumpulkan dalam pencatatan arsip adalah alamat protokol internet (IP), jenis browser,
                            penyedia
                            Layanan Internet, penanda tanggal dan waktu, halaman rujukan/keluar, dan jumlah klik.
                            Data-data
                            tersebut tidak terkait dengan informasi yang dapat diidentifikasi secara pribadi. Tujuan
                            dari
                            penggunaan informasi ini untuk menganalisis tren, mengelola situs, melacak pergerakan
                            pengguna
                            di situs web, dan mengumpulkan informasi demografis.</p>
                        <p><strong>Berikut data terkait dengan pengguna yang akan dikumpulkan:</strong></p>
                        <ul>
                            <li>Informasi kontak seperti; nama, nomor telepon, email, kartu identifikasi, dan berikut
                                fotonya.</li>
                            <li>Username dan kata sandi yang digunakan pengguna untuk login ke website Kursus Mengemudi
                                Indera.</li>
                            <li>Cara komunikasi pilihan pengunjung, untuk keperluan promosi dan komunikasi seperti
                                email marketing, pengingat transaksi, dan lain sebagainya.</li>
                            <li>Riwayat pembelian dan pencarian yang dilakukan pengunjung di website Kursus Mengemudi
                                Indera.</li>
                        </ul>
                        <p><strong>Penggunaan Data</strong></p>
                        <p>Beberapa cara penggunaan data:</p>
                        <ul>
                            <li>Penggunaan data dalam pembuatan Sertifikat Kursus Mengemudi</li>
                            <li>Keperluan komunikasi, proses penawaran atau pembelian produk atau layanan</li>
                            <li>Pengiriman katalog, promosi, email marketing, newsletter, dan proses digital marketing
                                lainnya</li>
                            <li>Penunjukkan informasi kepada pemerintah atau pihak berwenang. Khususnya, untuk urusan
                                terkait dengan hukum yang berlaku.</li>
                            <li>Otorisasi pengunjung dalam menggunakan layanan website.</li>
                            <li>Evaluasi, pengembangan, analisis data, pemecahan masalah, survei, dan peningkatan
                                pelayanan
                                website.</li>
                            <li>Rekomendasi konten atau iklan yang lebih sesuai dengan kebutuhan pengguna.</li>
                        </ul>
                        <p><strong>Cookie dan Web Beacon</strong></p>
                        <p>Seperti situs web lainnya, Kursus Mengemudi Indera menggunakan 'cookies'. Cookie tersebut
                            digunakan untuk
                            menyimpan informasi seperti preferensi pengunjung dan halaman yang diakses atau dikunjungi
                            sebelumnya. Informasi tersebut digunakan untuk mengoptimalkan pengalaman pengguna dengan
                            menyesuaikan konten halaman web kami berdasarkan jenis browser pengunjung dan /atau
                            informasi
                            lainnya.</p>
                        <p><strong>Kebijakan Privasi</strong></p>
                        <p>Peladen iklan pihak ketiga atau jaringan iklan menggunakan teknologi seperti cookie,
                            JavaScript,
                            atau Web Beacon yang digunakan masing-masing tautan iklan yang muncul di Kursus Mengemudi
                            Indera, yang
                            dikirim langsung ke browser pengguna. Mereka secara otomatis menerima alamat IP Anda ketika
                            ini
                            terjadi. Teknologi ini digunakan untuk mengukur efektivitas kampanye iklan mereka dan/atau
                            untuk
                            membuat personalisasi konten iklan yang Anda lihat di situs web yang Anda kunjungi.</p>
                        <p>Perhatikan bahwa Kursus Mengemudi Indera tidak memiliki akses atau kontrol terhadap cookie
                            yang
                            digunakan
                            oleh pengiklan pihak ketiga.</p>
                        <p><strong>Kebijakan Privasi Pihak Ketiga</strong></p>
                        <p>Kebijakan Privasi Kursus Mengemudi Indera tidak berlaku untuk pengiklan atau situs web lain.
                            Oleh
                            karena
                            itu, kami menyarankan Anda untuk berkonsultasi dengan masing-masing peladen iklan pihak
                            ketiga
                            untuk informasi Kebijakan Privasi yang lebih rinci. Informasi tersebut mungkin menjelaskan
                            mengenai praktik dan instruksi mereka perihal bagaimana cara keluar dari pilihan tertentu.
                        </p>
                        <p>Anda dapat memilih untuk menonaktifkan cookie melalui opsi browser Anda. Untuk mengetahui
                            informasi lebih rinci tentang pengaturan cookie di browser tertentu, Anda dapat mencari di
                            situs
                            web masing-masing browser. Apa Itu Cookie? </p>
                        <p><strong>Kebijakan Privasi Online </strong></p>
                        <p>Kebijakan Privasi ini hanya berlaku untuk aktivitas online dan berlaku untuk pengunjung situs
                            web
                            Kursus Mengemudi Indera, terkait dengan informasi yang mereka bagikan dan/atau kumpulkan di
                            Kursus Mengemudi Indera. Kebijakan ini tidak berlaku untuk informasi apa pun yang
                            dikumpulkan
                            secara offline atau melalui saluran selain situs web ini.</p>
                        <p><strong>Persetujuan </strong></p>
                        <p>Dengan menggunakan situs web kami, Anda dengan ini menyetujui Kebijakan Privasi kami dan
                            menyetujui Syarat dan Ketentuannya. </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer flex-center">
                <button type="button" class="btn btn-pills btn-light w-100 text-uppercase me-3"
                    data-bs-dismiss="modal"><i class="fa-duotone fa-xmark"></i> Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Kebijakan Privasi -->
<?= $this->endSection() ?>

<?= $this->section('pageScript'); ?>
<script>
$(document).ready(function() {
    $('#show-password').click(function() {
        if ($(this).is(':checked')) {
            $('#inputPassword').attr('type', 'text');
        } else {
            $('#inputPassword').attr('type', 'password');
        }
    });
});
</script>
<?= $this->endSection() ?>