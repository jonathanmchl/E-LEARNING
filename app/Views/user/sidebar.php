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
            <li class="">
                <a href="<?= base_url('/'); ?>">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="">
                <a>
                    <select class="form-control" id="kategori" name="kategori" aria-label="State" class="form-select">
                        <option selected>My Courses</option>
                        <option value="Teori">Teori</option>
                        <option value="Responsi">Responsi</option>
                        <option value="Praktikum">Praktikum</option>
                    </select>
                </a>
            </li>
            <ul class="nav">
                <li class="active-pro active">
                    <a href="<?= base_url('/Auth/logout'); ?>">
                        <i class="nc-icon nc-spaceship"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </ul>
    </div>
</div>