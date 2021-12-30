<?php $this->extend('layout_login') ?>

<?= $this->section('css') ?>
<link href="assets/css/app/login/login-v2.css" rel="stylesheet" type="text/css" />


<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid__item   kt-grid__item--fluid kt-grid  kt-grid kt-grid--hor kt-login-v2" id="kt_login_v2">

        <!--begin::Item-->
        <div class="kt-grid__item  kt-grid--hor">

            <!--begin::Heade-->
            <div class="kt-login-v2__head">
                <div class="kt-login-v2__logo">
                    <a href="#">
                        <img src="assets/media/logos/logo-5.png" alt="" />
                    </a>
                </div>
            </div>

            <!--begin::Head-->
        </div>

        <!--end::Item-->

        <!--begin::Item-->
        <div class="kt-grid__item  kt-grid  kt-grid--ver  kt-grid__item--fluid">

            <!--begin::Body-->
            <div class="kt-login-v2__body">

                <!--begin::Wrapper-->
                <div class="kt-login-v2__wrapper">
                    <div class="kt-login-v2__container">
                        <div class="kt-login-v2__title">
                            <h3>Đăng ký</h3>
                        </div>

                        <!--begin::Form-->
                        <form class="kt-login-v2__form kt-form" action="" autocomplete="off" id="form_register">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Họ và tên" name="name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Mật khẩu" name="password" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Số điện thoại" name="phone" autocomplete="off">
                            </div>

                            <!--begin::Action-->
                            <div class="kt-login-v2__actions">
                                <button type="submit" class="btn btn-brand btn-elevate btn-pill" id="submit_register">Sign In</button>
                            </div>

                            <!--end::Action-->
                        </form>

                        <!--end::Form-->

                        <!--begin::Separator-->
                        <div class="kt-separator kt-separator--space-lg  kt-separator--border-solid"></div>

                        <!--end::Separator-->

                        <!--begin::Options-->
                        <h3 class="kt-login-v2__desc">Or sign with social account</h3>
                        <div class="kt-login-v2__options">
                            <a href="#" class="btn btn-facebook btn-pill">
                                <i class="fab fa-facebook-f"></i>
                                Facebook
                            </a>
                            <a href="#" class="btn btn-twitter btn-pill">
                                <i class="fab fa-twitter"></i>
                                Twitter
                            </a>
                            <a href="#" class="btn btn-google btn-pill">
                                <i class="fab fa-google"></i>
                                Google
                            </a>
                        </div>

                        <!--end::Options-->
                    </div>
                </div>

                <!--end::Wrapper-->

                <!--begin::Image-->
                <div class="kt-login-v2__image">
                    <img src="assets/media/misc/bg_icon.svg" alt="">
                </div>

                <!--begin::Image-->
            </div>

            <!--begin::Body-->
        </div>

        <!--end::Item-->

        <!--begin::Item-->
        <div class="kt-grid__item">
            <div class="kt-login-v2__footer">
                <div class="kt-login-v2__link">
                    <a href="#" class="kt-link kt-font-brand">Privacy</a>
                    <a href="#" class="kt-link kt-font-brand">Legal</a>
                    <a href="#" class="kt-link kt-font-brand">Contact</a>
                </div>
                <div class="kt-login-v2__info">
                    <a href="#" class="kt-link">&copy; 2018 KeenThemes</a>
                </div>
            </div>
        </div>

        <!--end::Item-->
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
    var URL_REGISTER_AJAX = "<?= route_to('app_user_register_ajax') ?>"
</script>

<script src="assets/js/app/login/register.js" type="text/javascript"></script>

<?= $this->endSection() ?>
