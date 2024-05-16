<?= $this->extend('partials/head') ?>
<?= $this->section('nav') ?>
<li class="w-25" id="nav_dashboard">
    <a href="<?=base_url("dashboard")?>" class="icon">
        <img class="unactive" src="<?= base_url() ?>public/assets/images/svg/home.svg" alt="home" />
        <img class="active" src="<?= base_url() ?>public/assets/images/svg/home-fill.svg" alt="home" />
        <span>Dashboard</span>
    </a>
</li>
<li class="w-25" id="nav_order">
    <a href="<?=base_url("order")?>" class="icon">

        <img class="unactive" src="<?= base_url() ?>public/assets/images/svg/receipt.svg" alt="receipt" />
        <img class="active" src="<?= base_url() ?>public/assets/images/svg/my-order-fill.svg" alt="receipt" />
        <span>Order</span>
    </a>
</li>
<li class="w-25" id="nav_customer">
    <a href="<?=base_url("customer")?>" class="icon">

        <img class="unactive" src="<?= base_url() ?>public/assets/images/svg/user.svg" alt="grocery" />
        <img class="active" src="<?= base_url() ?>public/assets/images/svg/user-fill.svg" alt="grocery" />
        <span>Customer</span>
    </a>
</li>

<li class="w-25" id="nav_profile">
    <a href="<?=base_url("profile")?>" class="icon">

        <img class="unactive" src="<?= base_url() ?>public/assets/images/svg/setting.svg" alt="user" />
        <img class="active" src="<?= base_url() ?>public/assets/images/svg/setting.svg" alt="user" />
        <span>Pengaturan</span>
    </a>
</li>

<script>
    var navActive = "<?= $nav_active ?>";
    document.addEventListener("DOMContentLoaded", function() {
        var navItems = document.querySelectorAll('li[id^="nav_"]'); // Selects all <li> elements whose id starts with "nav_"
        navItems.forEach(function(item) {
            if (item.id === "nav_" + navActive) {
                item.classList.add('active'); // Adds 'active' class to the matching element
            }
        });
    });
</script>
<?= $this->endSection('nav') ?>