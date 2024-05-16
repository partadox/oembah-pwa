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

    <!-- delivery boy details page starts -->
    <section class="section-b-space pt-0">
        <img class="img-fluid login-img restaurant-login-img auth-img"
            src="public/assets/images/restaurant-partner/restaurant.png" alt="restaurant" />
        <div class="custom-container">
            <h2 class="dark-text fw-semibold details-heading">Data Usaha Laundry Anda</h2>
            <form class="auth-form" target="_blank">
                <div class="form-group">
                    <label class="form-label fw-semibold">Nama Owner</label>
                    <input type="text" class="form-control shadow-none" placeholder="Nama pemilik laundry" />
                </div>
                <div class="form-group mt-3">
                    <label class="form-label fw-semibold">Nomor WA Owner</label>
                    <input type="number" class="form-control shadow-none" placeholder="No. WA pemilik laundry" />
                </div>
                <div class="form-group mt-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control shadow-none" placeholder="Email pemilik laundry" />
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mt-3">
                            <label class="form-label fw-semibold">Nama Usaha Laundry</label>
                            <input type="text" class="form-control shadow-none" placeholder="Nama usaha laundry" />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group mt-3">
                            <label class="form-label fw-semibold">Deskripsi</label>
                            <textarea type="text" class="form-control shadow-none" rows="3"
                                placeholder="Masukan deskripsi"></textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group mt-3">
                            <label class="form-label fw-semibold">Alamat</label>
                            <input type="text" class="form-control shadow-none"
                                placeholder="Alamat outlet anda" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <label class="form-label fw-semibold">Kota</label>
                            <input type="text" class="form-control shadow-none" placeholder="Kota" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mt-3">
                            <label class="form-label fw-semibold">Provinsi</label>
                            <input type="text" class="form-control shadow-none" placeholder="Provinsi" />
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="fixed-btn">
            <div class="custom-container">
                <a href="<?= base_url("otp-validation") ?>" class="btn theme-btn mt-0 w-100">Daftar</a>
            </div>
        </div>
    </section>
    <!-- delivery boy details page end -->

    <!-- panel-space start -->
    <section class="panel-space"></section>
    <!-- panel-space end -->
    <?= $this->renderSection('script') ?>
</body>

</html>