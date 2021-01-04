<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
        <?php echo $nama; ?>
            <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="<?= base_url('/'); ?>">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/MatkulController/index'); ?>">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Tambah Matkul</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/tambahmateri'); ?>">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Materi</p>
                </a>
            </li>
            <li>
                <a href="./notifications.html">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="">
                <a href="./user.html">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="./tables.html">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Presensi</p>
                </a>
            </li>
            <li>
            <a href="<?= base_url('/Kuis/index'); ?>">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Kuis</p>
                </a>
            </li>
            <li class="active-pro active">
                <a href="<?= base_url('/Auth/logout'); ?>">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>