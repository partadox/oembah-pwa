<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Oembah adalah aplikasi POS yang dirancang khusus untuk memudahkan pengelolaan bisnis laundry Anda. Dengan antarmuka yang ramah pengguna dan fitur yang kaya, Oembah membantu Anda mengoptimalkan operasi harian, mulai dari pengelolaan pesanan hingga keuangan." />
    <meta name="keywords" content="PWA Aplikasi Laundry" />
    <meta name="author" content="Oembah" />
    <link rel="icon" href="<?= base_url()?>public/assets/images/logo/favicon.png" type="image/x-icon" />
    <title><?= $title ?></title>
    <link rel="apple-touch-icon" href="<?= base_url()?>public/assets/images/logo/favicon.png" />
    <meta name="theme-color" content="#ff8d2f" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Oembah" />
    <meta name="msapplication-TileImage" content="<?= base_url()?>public/assets/images/logo/favicon.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- font link -->
    <link rel="stylesheet" href="<?= base_url()?>public/assets/css/vendors/metropolis.min.css" />

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/vendors/remixicon.css" />

    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>public/assets/css/vendors/swiper-bundle.min.css" />

    <!-- bootstrap css -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="<?= base_url()?>public/assets/css/vendors/bootstrap.min.css" />

    <!-- Theme css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="<?= base_url()?>public/assets/css/style.css" />
</head>

<body>

    <!-- login page start -->
    <section class="section-b-space pt-0">
        <img class="img-fluid login-img restaurant-login-img auth-img"
        src="public/assets/images/restaurant-partner/restaurant.png" alt="restaurant" />

        <div class="custom-container">
            <form class="auth-form mt-4">
            <h2>Masukan nomor WA untuk mendapatkan kode OTP</h2>

            <div class="form-group mt-4">
                <label class="form-label fw-semibold dark-text">No Whatsapp</label>
                <div class="d-flex gap-3">
                    <div class="dropdown dark-border-gradient">
                        <a class="btn dropdown-toggle mt-0" href="#" role="button" data-bs-toggle="dropdown">+62 </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item">+62</a></li>
                        </ul>
                    </div>
                    <div class="form-input dark-border-gradient">
                        <input type="tel" class="form-control" id="phone" placeholder="Masukan Nomor Whatsapp" />
                    </div>
                </div>
                <label class="form-label fw-semibold dark-text mt-3">Password</label>
                <div class="d-flex gap-3">
                    <div class="form-input dark-border-gradient">
                        <input type="password" class="form-control" id="password" placeholder="Masukan Password" />
                    </div>
                </div>
            </div>

            <a href="<?= base_url("otp-validation") ?>" class="btn theme-btn w-100 mt-4" role="button">Login</a>
            </form>

            <div class="division">
            <span>Belum Memiliki Akun?</span>
            </div>

            <a href="<?= base_url("register") ?>" class="btn gray-btn mt-3">Daftar</a>

            <p class="text-center">Dengan ini anda terlah menyetujui kebijakan privasi dan ketentuan layanan kami.</p>
        </div>
    </section>

    <!-- login page end -->

    <!-- panel-space start -->
    <section class="panel-space"></section>
    <!-- panel-space end -->
    <?= $this->renderSection('script') ?>
</body>

</html>