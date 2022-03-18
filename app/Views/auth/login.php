<?= $this->extend('auth/layout'); ?>
<?= $this->Section('content'); ?>
<section class="bg-auth-home bg-circle-gradiant d-table w-100">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow rounded border-0 mt-4">
                    <div class="card-body">
                        <h4 class="card-title text-center"><?= lang('Auth.loginTitle') ?></h4>
                        <p class="card-text text-center mb-2"><?= lang('Auth.loginText') ?></p>
                        <?= view('auth/_message_block') ?>
                        <form class="login-form mt-4" action="<?= route_to('login') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="row">
                                <!-- BEGIN: Form Email dan Username -->
                                <?php if ($config->validFields === ['email']) : ?>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="login"><?= lang('Auth.emailAddress') ?> <span
                                                class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-user icon-sm icons"></i>
                                            <input type="email"
                                                class="form-control ps-5  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.enterEmail'); ?>" name="login" autofocus>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                    <?php else : ?>

                                    <div class="mb-3">
                                        <label class="form-label" for="login"><?= lang('Auth.emailOrUsername') ?> <span
                                                class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-user icon-sm icons"></i>
                                            <input type="text"
                                                class="form-control ps-5  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.emailOrUsername'); ?>" name="login"
                                                autofocus>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <!-- END: Form Email dan Username -->

                                <!-- BEGIN: Password -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="password" class="form-label"><?= lang('Auth.password') ?> <span
                                                class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i class="far fa-key icon-sm icons"></i>
                                            <input type="password" name="password"
                                                class="form-control ps-5 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?= lang('Auth.enterPassword') ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Password -->

                                <!-- BEGIN: Remember Password -->
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <?php if ($config->allowRemembering) : ?>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" <?php if (old('remember')) : ?> checked
                                                    <?php endif ?>>
                                                <label class="form-check-label"
                                                    for="flexCheckDefault"><?= lang('Auth.rememberMe') ?></label>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if ($config->activeResetter) : ?>
                                        <p class="forgot-pass mb-0"><a href="<?= route_to('forgot') ?>"
                                                class="text-primary fw-bold"><?= lang('Auth.forgotYourPassword') ?></a>
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- END: Remember Password -->

                                <!-- BEGIN: Tombol Login -->
                                <div class="col-lg-12 mb-0">
                                    <div class="d-grid">
                                        <button type="submit"
                                            class="btn btn-primary btn-block"><?= lang('Auth.signIn') ?></button>

                                    </div>
                                </div>
                                <!-- END: Tombol Login -->

                                <!-- BEGIN: Daftar akun -->
                                <?php if ($config->allowRegistration) : ?>
                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small
                                            class="text-dark me-1"><?= lang('Auth.needAnAccount') ?></small>
                                        <a href="<?= route_to('register') ?>"
                                            class="text-primary fw-bold"><?= lang('Auth.register') ?></a>
                                    </p>
                                </div>
                                <?php endif; ?>
                                <!-- END: Daftar akun -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>