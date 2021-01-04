<?= $this->extend('user/index'); ?>
<?= $this->section('content'); ?>
<div class="wrapper ">
    <div class="main-panel">
        <div class="content">
            <div class="row">
                <!-- <div class="card"> -->
                <!-- <div class="card-header">
                    Quote
                </div> -->
                <!-- <div class="card-body"> -->
                <?php foreach ($matkul as $m) : ?>
                    <blockquote class="blockquote mb-0 col-md-12 mt-2">
                        <a href="/UserController">
                            <p><?= $m['kategori'] ?></p>
                            <p><?= $m['nama_matkul'] ?></p>
                            <p><?= $m['kelas'] ?></p>
                        </a>
                        <footer class="blockquote-footer"><?= $m['pengajar'] ?></footer>
                    </blockquote>
                <?php endforeach; ?>
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>