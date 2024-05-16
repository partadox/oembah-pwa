<?= $this->extend('partials/script') ?>
<?= $this->section('content') ?>

<!-- banner section start -->
<section class="banner-section section-t-space">
    <div class="custom-container">
        <div class="swiper banner1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <img class="img-fluid banner-img" src="<?= base_url()?>public/assets/images/banner/banner1.png" alt="banner1" />
            </div>

            <div class="swiper-slide">
            <div class="home-banner2">
                <img class="img-fluid banner-img" src="<?= base_url()?>public/assets/images/banner/banner2.png" alt="banner2" />
            </div>
            </div>

            <div class="swiper-slide">
            <img class="img-fluid banner-img" src="<?= base_url()?>public/assets/images/banner/banner3.png" alt="banner3" />
            </div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
    </div>
</section>
<!-- banner section end -->

<!-- dashboard section starts -->
<section class="section-b-space">
    <div class="custom-container">

        <div class="total-sales-background mt-3">
            <div class="earning-card-details">
                <div class="w-100">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid icon " src="<?= base_url() ?>public/assets/images/svg/empty-wallet.svg" alt="wallet-money">
                        <div class="ps-2">
                            <h5 class="dark-text">Order Hari Ini</h5>
                        </div>
                        <h2 class="ms-auto">100</h2>
                    </div>
                </div>
            </div>

            <ul class="sale-timing-list">
                <li class="w-100">
                    <div class="sale-timing-box">
                        <h6 class="fw-normal dark-text">Order Mei 2024</h6>
                        <h3 class="fw-semibold theme-color">400</h3>
                    </div>
                </li>
                <li class="w-100">
                    <div class="sale-timing-box">
                        <h6 class="fw-normal dark-text">Order April 2024</h6>
                        <h3 class="fw-semibold theme-color">240</h3>
                    </div>
                </li>
                <li class="w-100">
                    <div class="sale-timing-box">
                        <h6 class="fw-normal dark-text">Total Customer</h6>
                        <h3 class="fw-semibold theme-color">1.400</h3>
                    </div>
                </li>
            </ul>
        </div>

        <ul class="profile-details-list order-list restaurant-order-list mt-4 mb-0">
            <li class="w-100">
                <h5>Rp</h5>
                <h2>100.000</h2>
                <h6>Hari Ini</h6>
            </li>
            <li class="w-100">
                <h5>Rp</h5>
                <h2>700.000</h2>
                <h6>Minggu Ini</h6>
            </li>
            <li class="w-100">
                <h5>Rp</h5>
                <h2>3.000.000</h2>
                <h6>Bulan Ini</h6>
            </li>
            <li class="w-100">
                <h5>Rp</h5>
                <h2>3.500.000</h2>
                <h6>Bulan Lalu</h6>
            </li>
        </ul>
    </div>
</section>
<!-- dashboard section end -->

<section class="section-b-space">
    <div class="custom-container">
        <a href="<?= base_url("order-new") ?>" class="btn theme-btn apply-btn w-100"> <i class="ri-add-line add"></i> Order Baru</a>
    </div>
</section>


<!-- panel-space start -->
<section class="panel-space"></section>
<!-- panel-space end -->

<?= $this->endSection('content') ?>