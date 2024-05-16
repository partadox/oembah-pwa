<?= $this->extend('partials/script') ?>
<?= $this->section('content') ?>

<!-- Notification start -->
<section class="section-b-space pt-0">
    <div class="custom-container">
        <div class="empty-tab">
            <img class="img-fluid empty-bell w-100" src="<?= base_url() ?>public/assets/images/404.svg" alt="404" />

            <h2>Oops! Not Found Page</h2>
            <p>Halaman yang anda cari tidak ditemukan.</p>
            <a href="<?= base_url() ?>" class="btn theme-btn try-btn mt-3 p-3">Kembali</a>
            <!-- <div class="fixed-btn w-100">
                <div class="custom-container">
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Notification end -->

<!-- panel-space start -->
<section class="panel-space"></section>
<!-- panel-space end -->

<?= $this->endSection('content') ?>