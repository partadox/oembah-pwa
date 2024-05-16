<?= $this->extend('partials/script') ?>
<?= $this->section('content') ?>
    <!-- Filter section start -->
    <section class="section-t-space">
        <div class="custom-container">
            <div class="swiper categories">
                <div class="swiper-wrapper ratio_square">
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="card-title text-center">
                                    <p>Terima</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="card-title text-center">
                                    <p>Cuci</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="card-title text-center">
                                    <p>Kering</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="card-title text-center">
                                    <p>Setrika</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <div class="card">
                                <div class="card-title text-center">
                                    <p>Selesai</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Filter section end -->
    <!-- Search section start -->
    <section class="search-section">
        <div class="custom-container">
            <form class="auth-form search-head" target="_blank">
                <div class="form-group">
                    <div class="form-input">
                        <input type="search" class="form-control search" id="inputusername" placeholder="Cari berdasarkan order ID atau Nama">
                        <i class="ri-search-line search-icon"></i>
                    </div>

                    <a href="#search-filter" class="btn filter-button mt-0" data-bs-toggle="modal">
                        <i class="ri-qr-scan-line"></i>
                    </a>
                </div>
            </form>
        </div>
    </section>
    <!-- Search section end -->

    <!-- data list section starts -->
    <section class="section-b-space">
        <div class="custom-container">
            <ul class="earning-list mt-0">
                <li>
                    <a href="#order" data-bs-toggle="modal">
                        <div class="earning-box">
                            <div class="earning-img">
                                <i class="theme-color ri-bill-line"></i>
                            </div>

                            <div class="earning-content flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="light-text fw-normal">01-05-2024</h6>
                                    <span class="success">Selesai</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-normal dark-text mt-1">#ACR148856</h6>
                                </div>
                            </div>
                        </div>
                        <div class="earning-details">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="dark-text fw-normal">Cristiano Ronaldo (+6284972841342)</h6>
                                <h6 class="fw-normal dark-text mt-2">Total</h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fw-medium dark-text">Cuci Kering</h6>
                                <h5 class="fw-semibold theme-color mt-2">Rp32.000</h5>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#order" data-bs-toggle="modal">
                        <div class="earning-box">
                            <div class="earning-img">
                                <i class="theme-color ri-bill-line"></i>
                            </div>

                            <div class="earning-content flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="light-text fw-normal">01-05-2024</h6>
                                    <span class="warning">Disetrika</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-medium dark-text mt-1">#ACR148157</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="earning-details">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="dark-text fw-normal">Lionel Messi</h6>
                            <h6 class="fw-normal dark-text mt-2">Total</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-medium dark-text">Cuci Setrika</h6>
                            <h5 class="fw-semibold theme-color mt-2">Rp50.000</h5>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#order" data-bs-toggle="modal">
                        <div class="earning-box">
                            <div class="earning-img">
                                <i class="theme-color ri-bill-line"></i>
                            </div>

                            <div class="earning-content flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="light-text fw-normal">01-05-2024</h6>
                                    <span class="secondary">Dicuci</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-normal dark-text mt-1">#ACR148856</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="earning-details">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="dark-text fw-normal">Robie van Persie</h6>
                            <h6 class="fw-normal dark-text mt-2">Total</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-medium dark-text">Cuci Bijian</h6>
                            <h5 class="fw-semibold theme-color mt-2">Rp72.000</h5>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- data list section end -->

    <!-- order modal starts -->
    <div class="modal order-modal fade" id="order" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Order ID : #SPS148889</h3>
                </div>
                <div class="modal-body">

                    <div class="details-box mb-2">
                        <h5 class="details-title">Customer</h5>
                        <div class="details-box-content pt-0">
                            <div class="distance">
                                <ul>
                                    <li>
                                        <i class="ri-bookmark-line theme-color"></i>ARC1242
                                    </li>
                                    <li>
                                        <i class="ri-account-circle-line theme-color"></i>Cristiano Ronaldo
                                    </li>
                                    <li>
                                        <i class="ri-phone-line theme-color"></i>+628374615313
                                    </li>
                                    <li>
                                        <i class="ri-home-2-line theme-color"></i>Jl. Pancasila No.15, Malang
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="bill-details">
                        <div class="total-detail">
                            <div class="sub-total mb-2">
                                <h5 class="light-text">Cuci Setrika</h5>
                                <h5 class="fw-semibold dark-text">Rp30.000</h5>
                            </div>
                            <div class="sub-total mb-2">
                                <h5 class="light-text">Sprei</h5>
                                <h5 class="dark-text fw-semibold">Rp50.000</h5>
                            </div>
                            <div class="sub-total mb-2">
                                <h5>Biaya Antar</h5>
                                <h5 class="fw-semibold dark-text">Rp10.000</h5>
                            </div>
                            <div class="grand-total">
                                <h5 class="fw-semibold">Total</h5>
                                <h5 class="fw-semibold amount">Rp90.000</h5>
                            </div>

                            <img class="dots-design" src="public/assets/images/svg/dots-design.svg" alt="dots" />
                        </div>
                    </div>

                    <div class="details-box">
                        <h5 class="details-title">Riwayat</h5>
                        <div class="details-box-content pt-0">
                            <div class="distance">
                                <ul>
                                    <li>
                                        <i class="ri-time-fill theme-color"></i>Diterima : 01-05-2024 12:00 WIB (Arik)
                                    </li>
                                    <li>
                                        <i class="ri-time-fill theme-color"></i>Dicuci : 02-05-2024 12:00 WIB (Marno)
                                    </li>
                                    <li>
                                        <i class="ri-time-fill theme-color"></i>Dikeringkan : 02-05-2024 15:00 WIB (Marno)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="details-box d-flex align-items-center justify-content-between">
                        <h5 class="details-title pb-0 border-0">Pembayaran</h5>
                        <span>Tunai</span>
                    </div>
                    <div class="details-box d-flex align-items-center justify-content-between">
                        <h5 class="details-title pb-0 border-0">Order Status</h5>
                        <span>Selesai</span>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <div class="row">
                        <div class="col">
                            <a href="" class="btn w-100 gray-btn mt-0" data-bs-toggle="modal">Batal</a>
                        </div>
                        <div class="col">
                            <a href="" class="btn w-100 theme-btn mt-0">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order modal end -->
<!-- panel-space start -->
<section class="panel-space"></section>
<!-- panel-space end -->

<?= $this->endSection('content') ?>