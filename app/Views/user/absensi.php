<?= $this->extend('user/index'); ?>
<?= $this->section('content'); ?>

<div class="wrapper ">
    <div class="main-panel">
        <div class="content">

       <p>Silahkan pilih Absensi dibawah ini : </p>    
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
        <label class="form-check-label" for="exampleRadios1">Hadir</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">Izin</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">Sakit</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">Tidak Hadir</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
    

<?= $this->endSection(); ?>