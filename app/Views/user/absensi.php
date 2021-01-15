<?= $this->extend('user/index'); ?>
<?= $this->section('content'); ?>

<div class="wrapper ">
    <div class="main-panel">
        <div class="content">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <p>Silahkan pilih Absensi dibawah ini : </p>
            <form action="/Absen/save" method="post">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control col-sm-4" aria-describedby="passwordHelpBlock">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" id="npm" name="npm" class="form-control col-sm-4" aria-describedby="passwordHelpBlock">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" id="keterangan" value="Hadir">
                    <label class="form-check-label" for="keterangan">
                        Hadir
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" id="keterangan" value="Izin">
                    <label class="form-check-label" for="keterangan">
                        Izin
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" id="keterangan" value="Sakit">
                    <label class="form-check-label" for="keterangan">
                        Sakit
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" id="keterangan" value="Tidak Hadir">
                    <label class="form-check-label" for="keterangan">
                        Tidak Hadir
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>