<?= $this->extend('partials/script') ?>
<?= $this->section('content') ?>

    <section class="search-section">
        <div class="custom-container">
        <form class="auth-form search-head" target="_blank">
            <div class="form-group">
            <div class="form-input w-100">
                <input type="search" class="form-control search" id="inputusername" placeholder="Cari nama atau customer ID" />
                <i class="ri-search-line search-icon"></i>
            </div>
            </div>
        </form>
        </div>
    </section>

    <!-- data list section starts -->
    <section class="section-b-space">
        <div class="custom-container">
            <ul class="earning-list mt-0">
                <li>
                    <a href="#order" data-bs-toggle="modal">
                        <div class="earning-box">
                            <div class="earning-img">
                                <i class="theme-color ri-account-circle-line"></i>
                            </div>

                            <div class="earning-content flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="light-text fw-normal">CSR3953295613536</h6>
                                    <span class="theme-color">1</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-normal dark-text mt-1">Cristiano Ronaldo</h6> <br>
                                    <h6 class="fw-normal dark-text mt-1">+623253546134</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#order" data-bs-toggle="modal">
                        <div class="earning-box">
                            <div class="earning-img">
                                <i class="theme-color ri-account-circle-line"></i>
                            </div>

                            <div class="earning-content flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="light-text fw-normal">CSR3953295613536</h6>
                                    <span class="theme-color">2</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-normal dark-text mt-1">Bambang P.</h6> <br>
                                    <h6 class="fw-normal dark-text mt-1">+623253546134</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#order" data-bs-toggle="modal">
                        <div class="earning-box">
                            <div class="earning-img">
                                <i class="theme-color ri-account-circle-line"></i>
                            </div>

                            <div class="earning-content flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="light-text fw-normal">CSR3953295613536</h6>
                                    <span class="theme-color">3</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-normal dark-text mt-1">Bang Messi</h6> <br>
                                    <h6 class="fw-normal dark-text mt-1">+623253546134</h6>
                                </div>
                            </div>
                        </div>
                    </a>
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
                    <h3 class="modal-title">Customer ID : #SPS148889</h3>
                </div>
                <form class="auth-form profile-form" target="_blank">
                    <div class="modal-body">
                        <div class="custom-container">
                            
                                <div class="form-group">
                                    <label class="form-label fw-semibold">Name</label>
                                    <div class="form-input mb-3">
                                        <input type="text" class="form-control" value="Cristiano Ronaldo" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label fw-semibold">No WA</label>
                                    <div class="form-input mb-3">
                                        <input type="text" class="form-control" value="+6284124351353" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label fw-semibold">Alamat</label>
                                    <div class="form-input mb-3">
                                        <textarea class="form-control" rows="2">Jl. A. Yani No.67</textarea>
                                    </div>
                                </div>
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
                </form>
            </div>
        </div>
    </div>
    <!-- order modal end -->

<!-- panel-space start -->
<section class="panel-space"></section>
<!-- panel-space end -->

<?= $this->endSection('content') ?>