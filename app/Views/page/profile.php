<?= $this->extend('partials/script') ?>
<?= $this->section('content') ?>

<!-- profile info start -->
<section>
    <div class="custom-container">
    <div class="profile-cover">
        <img class="img-fluid profile-pic" src="public/assets/images/icons/profile.png" alt="profile" />
    </div>
    <div class="profile-name">
        <h5>Oembah Owner</h5>
        <h6>+62830853353</h6>
    </div>
    </div>
</section>
<!-- profile info end -->

<!-- profile listing start -->
<section>
    <div class="custom-container">
        <ul class="profile-details-list">
            <li>
            <h2>10</h2>
            <h6>Staff</h6>
            </li>
            <li>
            <h2>2</h2>
            <h6>Cabang</h6>
            </li>
        </ul>

        <ul class="profile-list">
            <li>
                <div class="profile-box">
                    <div class="profile-icon">
                        <img class="img-fluid icon" src="public/assets/images/svg/manage-payment.svg" alt="profile" />
                    </div>
                    <a href="#" class="profile-box-name">
                        <h5>Manajemen Layanan</h5>
                        <i class="ri-arrow-right-s-line arrow"></i>
                    </a>
                </div>
            </li>

            <li>
                <div class="profile-box">
                    <div class="profile-icon">
                    <img class="img-fluid icon" src="public/assets/images/svg/profile.svg" alt="profile" />
                    </div>
                    <a href="#" class="profile-box-name">
                    <h5>Manajemen Staff</h5>
                    <i class="ri-arrow-right-s-line arrow"></i>
                    </a>
                </div>
            </li>

            <li>
            <div class="profile-box">
                <div class="profile-icon">
                <img class="img-fluid icon" src="public/assets/images/restaurant-partner/svg/bank.svg" alt="location" />
                </div>
                <a href="#" class="profile-box-name">
                <h5>Manajemen Cabang</h5>
                <i class="ri-arrow-right-s-line arrow"></i>
                </a>
            </div>
            </li>

            <li>
            <div class="profile-box">
                <div class="profile-icon">
                <img class="img-fluid icon" src="public/assets/images/svg/my-order.svg" alt="order" />
                </div>
                <a href="#" class="profile-box-name">
                <h5>Manajemen Shift Kerja</h5>
                <i class="ri-arrow-right-s-line arrow"></i>
                </a>
            </div>
            </li>
            <li>
            <div class="profile-box">
                <div class="profile-icon">
                <img class="img-fluid icon" src="public/assets/images/svg/ticket.svg" alt="ticket" />
                </div>
                <a href="#" class="profile-box-name">
                <h5>Promo</h5>
                <i class="ri-arrow-right-s-line arrow"></i>
                </a>
            </div>
            </li>
            <li>
            <div class="profile-box">
                <div class="profile-icon">
                <img class="img-fluid icon" src="public/assets/images/svg/setting.svg" alt="setting" />
                </div>
                <a href="#" class="profile-box-name">
                <h5>Ubah Data Toko</h5>
                <i class="ri-arrow-right-s-line arrow"></i>
                </a>
            </div>
            </li>

            <li>
            <div class="profile-box">
                <div class="profile-icon">
                <img class="img-fluid icon" src="public/assets/images/svg/logout.svg" alt="logout" />
                </div>
                <a href="<?=base_url()?>" class="profile-box-name">
                <h5>Keluar</h5>
                <i class="ri-arrow-right-s-line arrow"></i>
                </a>
            </div>
            </li>
        </ul>
    </div>
</section>
<!-- profile listing end -->

<!-- panel-space start -->
<section class="panel-space"></section>
<!-- panel-space end -->

<?= $this->endSection('content') ?>