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
                        <p class="card-text text-center mb-2"><?= lang('Auth.resetText') ?></p>
                        <?= view('auth/_message_block') ?>
                        <form class="login-form mt-4" action="<?= route_to('reset-password') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="token"><?= lang('Auth.token') ?> <span
                                                class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-coins icon-sm icons"></i>
                                            <input type="text" name="token"
                                                class="form-control ps-5 <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.enterToken'); ?>"
                                                value="<?= old('token', $token ?? '') ?>" autofocus>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= session('errors.token') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label"><?= lang('Auth.emailAddress') ?> <span
                                                class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-envelope icon-sm icons"></i>
                                            <input type="email" name="email"
                                                class="form-control ps-5 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.enterEmail'); ?>"
                                                value="<?= old('email') ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label"><?= lang('Auth.newPassword') ?>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-key icon-sm icons"></i>
                                            <input type="password" name="password" id="inputPassword"
                                                class="form-control ps-5 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.enterNewPassword') ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Password -->

                                <!-- BEGIN: Konfirmasi Password -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label"
                                            for="pass_confirm"><?= lang('Auth.repeatPasswordNew') ?>
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-key icon-sm icons"></i>
                                            <input type="password" name="pass_confirm" id="inputPassword"
                                                class="form-control ps-5 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.newPasswordRepeat') ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Konfirmasi Password -->

                                <!-- BEGIN: Tombol Kirim -->
                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary"><?= lang('Auth.resetPassword') ?></button>
                                    </div>
                                </div>
                                <!-- END: Tombol Kirim -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>