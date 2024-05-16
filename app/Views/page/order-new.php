<?= $this->extend('partials/script') ?>
<?= $this->section('content') ?>

<!-- Customer section start -->
<section>
    <div class="custom-container">
        <h3 class="fw-semibold dark-text">Customer</h3>
        <ul class="notification-setting mt-3">
            <li>
                <div class="notification pt-0">
                    <h5 class="fw-semibold dark-text">Customer Baru ?</h5>
                    <div class="switch-btn">
                        <input type="checkbox" id="switchCustomer"/>
                    </div>
                </div>
            </li>
        </ul>
        <div id="newCustomer" class="notification-setting card mt-3">
            <div class="form-group">
                <label class="form-label fw-semibold">Nama</label>
                <div class="form-input mb-3">
                    <input type="text" class="form-control" placeholder="Masukan nama" />
                </div>
            </div>
            <div class="form-group">
                <label class="form-label fw-semibold">No WA</label>
                <div class="form-input mb-3">
                    <input type="text" class="form-control" placeholder="Masukan nomor WA" />
                </div>
            </div>
            <div class="form-group">
                <label class="form-label fw-semibold">Alamat</label>
                <div class="form-input mb-3">
                    <textarea class="form-control" rows="2"></textarea>
                </div>
            </div>
        </div>
        <div id="findCustomer">
            <section class="search-section">
                <div class="auth-form search-head" target="_blank">
                    <div class="form-group">
                        <div class="form-input w-100">
                            <input type="search" class="form-control search" id="inputusername" placeholder="Cari nama atau customer ID" />
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<!-- Customer section end -->


<!-- Add Cart section start -->
<section>
    <div class="custom-container">
        <h3 class="fw-semibold dark-text">Layanan Dipilih</h3>
        <div class="horizontal-product-box mt-3">
            <div class="product-img">
                <img class="img-fluid img" src="public/assets/images/product/rp1.png" alt="rp1" />
            </div>
            <div class="product-content">
                <h5>Standard Cuci Setrika</h5>
                <h6>Rp7.000 / kg</h6>
                <div class="plus-minus">
                    <i class="ri-subtract-line sub"></i>
                        <input type="number" value="1" min="1" max="100" />
                    <i class="ri-add-line add"></i>
                </div>
                <i class="red-symbol ri-delete-bin-fill" style="color: red;"></i>
                <h3 class="product-price">Rp21.0000</h3>
            </div>
        </div>
    </div>
</section>
<!-- Add Cart section end -->

<!-- Add service section start -->
<section>
    <div class="custom-container">
        <a href="#" class="apply-coupon">
        <div>
            <h5 class="dark-text">Tambah Layanan</h5>
            <!-- <h6 class="coupon-code">#GOOGLE20</h6> -->
        </div>
        <i class="ri-add-line theme-color"></i>
        </a>
    </div>
</section>
<!-- Add service section end -->

<!-- Bill details section start -->
<section class="bill-details">
    <div class="custom-container">
        <h3 class="fw-semibold dark-text">Nota</h3>
        <div class="total-detail mt-3">
        <div class="sub-total mb-3">
            <h5>Cuci Setrika</h5>
            <h5 class="fw-semibold">Rp21.000</h5>
        </div>
        <div class="sub-total pb-3">
            <h5>PPN (11%)</h5>
            <h5 class="fw-semibold">Rp1.000</h5>
        </div>
        <div class="grand-total">
            <h5 class="fw-semibold">Total</h5>
            <h5 class="fw-semibold amount">Rp22.000</h5>
        </div>
        <img class="dots-design" src="public/assets/images/svg/dots-design.svg" alt="dots" />
        </div>
    </div>
</section>
<!-- Bill details section end -->

<!-- payment method section start -->
<section class="payment method section-lg-b-space">
    <div class="custom-container">
        <h3 class="fw-semibold dark-text section-t-space">Metode Pembayaran</h3>
        <ul class="payment-list section-lg-b-space">
            <li class="cart-add-box payment-card-box gap-0 mt-3">
                <div class="payment-detail">
                    <div class="add-img">
                        <img class="img-fluid img" src="public/assets/images/icons/svg/cash.svg" alt="cash" />
                    </div>
                    <div class="add-content">
                        <div>
                            <h5 class="fw-semibold dark-text">Tunai</h5>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" checked />
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-add-box payment-card-box gap-0 mt-3">
                <div class="payment-detail">
                    <div class="add-img">
                        <img class="img-fluid img" src="public/assets/images/icons/svg/qr.svg" alt="mastercard" />
                    </div>
                    <div class="add-content">
                        <div>
                            <h5 class="fw-semibold dark-text">QRIS</h5>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" />
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="d-flex align-items-center flex-nowrap gap-2">
            <a href="#success" class="btn theme-btn mt-0 w-100" data-bs-toggle="modal">Lanjut</a>
        </div>
    </div>
</section>
<!-- payment method section end -->

<!-- success payment modal start -->
<div class="modal fade success-modal" id="success" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="confirm-title">
                    <img class="img-fluid confirm-offer for-light" src="public/assets/images/gif/success-payment-light.gif"
                        alt="success-payment" />
                    <img class="img-fluid confirm-offer for-dark" src="public/assets/images/gif/success-payment-dark.gif"
                        alt="success-payment" />
                    <h2 class="dark-text text-center fw-semibold mt-2">Order Baru Tersimpan</h2>
                </div>
                <section class="payment method section-lg-b-space">
                    <div class="custom-container">
                        <div class="d-flex align-items-center flex-nowrap gap-2">
                            <a href="" class="btn theme-btn mt-0 w-100" data-bs-toggle="modal"><i class="ri-printer-line"></i> Print</a>
                            <a href="" class="btn gray-btn mt-0 w-100" data-bs-toggle="modal">Selesai</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
  <!-- susses payment modal end -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the checkbox and the two divs by their IDs
        var switchCustomerCheckbox = document.getElementById('switchCustomer');
        var newCustomerDiv = document.getElementById('newCustomer');
        var findCustomerDiv = document.getElementById('findCustomer');

        // Function to toggle the display of the divs based on the checkbox state
        function toggleCustomerDivs() {
            if (switchCustomerCheckbox.checked) {
                newCustomerDiv.style.display = 'block'; // Show the newCustomer div
                findCustomerDiv.style.display = 'none';  // Hide the findCustomer div
            } else {
                newCustomerDiv.style.display = 'none';   // Hide the newCustomer div
                findCustomerDiv.style.display = 'block'; // Show the findCustomer div
            }
        }

        // Add an event listener for the 'change' event on the checkbox
        switchCustomerCheckbox.addEventListener('change', toggleCustomerDivs);

        // Initial call to set the correct display state when the page loads
        toggleCustomerDivs();
    });
</script>

<?= $this->endSection('content') ?>