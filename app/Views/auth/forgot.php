<?= $this->extend('auth/layout'); ?>
<?= $this->Section('content'); ?>
<section class="bg-auth-home bg-circle-gradiant d-table w-100">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow rounded border-0 mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-center"><?= lang('Auth.forgotTitle') ?></h4>
                        <p class="card-text text-center mb-2"><?= lang('Auth.forgotText') ?></p>
                        <?= view('auth/_message_block') ?>

                        <form class="login-form mt-4" action="<?= route_to('forgot') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label"><?= lang('Auth.emailAddress') ?> <span
                                                class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-user icon-sm icons"></i>
                                            <input type="email" name="email"
                                                class="form-control ps-5 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.enterEmail'); ?>" name="email" autofocus>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- BEGIN: Tombol Kirim -->
                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary"><?= lang('Auth.sendInstructions') ?></button>
                                    </div>
                                </div>
                                <!-- END: Tombol Kirim -->

                                <div class="mx-auto">
                                    <p class="mb-0 mt-3"><small
                                            class="text-dark me-1"><?= lang('Auth.rememberPassword'); ?></small>
                                        <a href="<?= route_to('login') ?>"
                                            class="text-primary fw-bold"><?= lang('Auth.signIn'); ?></a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>