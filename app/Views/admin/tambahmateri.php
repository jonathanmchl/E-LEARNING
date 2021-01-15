<?= $this->extend('admin/index'); ?>
<?= $this->section('content'); ?>
<div class="wrapper ">
  <div class="main-panel">
    <div class="content">

      <h2 class="mb-5">Tambah Materi Mata Kuliah</h2>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>

      <form action="/Materi/save" method="post">
        <?= csrf_field(); ?>

        <div class="form-group row">
          <label for="bab" class="col-sm-2 col-form-label">BAB MATERI</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="bab" name="bab" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="judul" class="col-sm-2 col-form-label">JUDUL MATERI</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" name="judul" autofocus>
          </div>
        </div>

        <div class="form-group row">
          <label for="penjelasan" class="col-sm-2 col-form-label">PENJELASAN MATERI</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="penjelasan" name="penjelasan"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label for="file" class="col-sm-2 col-form-label">FILE MATERI</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="file" name="file" autofocus>
          </div>
        </div>

        <!-- <div class="form-group row">
          <label for="file" class="custom-file-label col-sm-6 col-form-label">FILE MATERI</label>
          <div class="col-sm-5">
            <input type="file" class="custom-file-input" id="file" name="file">
          </div>
        </div> -->

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?= $this->endSection(); ?>