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

    <!-- header start -->
    <header class="section-t-space">
        <div class="custom-container">
        <div class="header-panel">
            <?php if ($back != "") {?>
                <a href="<?= base_url($back) ?>">
                    <i class="ri-arrow-left-s-line"></i>
                </a>
            <?php }?>
            <h2><?= $title ?></h2>
        </div>
        </div>
    </header>
    <!-- header end -->

    <?= $this->renderSection('content') ?>

    <!-- bottom navbar start -->
    <div class="navbar-menu">
        <ul>
            <?= $this->renderSection('nav') ?>
        </ul>
    </div>
    <!-- bottom navbar end -->

    <!-- panel-space start -->
    <section class="panel-space"></section>
    <!-- panel-space end -->
    <?= $this->renderSection('script') ?>
</body>

</html>