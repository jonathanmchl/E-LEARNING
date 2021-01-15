<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/userr.png">
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
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/MatkulController/index'); ?>">
                    <i class="nc-icon nc-cloud-upload-94"></i>
                    <p>Tambah Matkul</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('/tambahmateri'); ?>">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Materi</p>
                </a>
            </li>
            <li>
            <a href="<?= base_url('/Absen/admin'); ?>">
                    <i class="nc-icon nc-tap-01"></i>
                    <p>Presensi</p>
                </a>
            </li>
            <li>
            <a href="<?= base_url('/Kuis/index'); ?>">
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>Kuis</p>
                </a>
            </li>
            <li class="active-pro active">
                <a href="<?= base_url('/Auth/logout'); ?>">
                    <i class="nc-icon nc-button-power"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>