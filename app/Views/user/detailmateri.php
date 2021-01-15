<?= $this->extend('user/index'); ?>
<?= $this->section('content'); ?>
<div class="wrapper ">
  <div class="main-panel">
    <div class="content">

      <h2 class="mt-2 mb-5 text-center"> Detail Materi </h2>
      <div class="card mb-3 mx-auto" style="max-width: 1000px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/img/asa.png" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <?php foreach ($materikuliah as $materi) : ?>
              <div class="card-body ">
                <h5 class="card-title">Data Warehouse</h5>
                <p class="card-text"><b><?= $materi['judul'] ?></p>
                <p class="card-text"><b><?= $materi['bab'] ?></p>
                <p class="card-text"><small class="text-muted"><?= $materi['penjelasan'] ?></small></p>


                <a href="#">Download Materi<?= $materi['file'] ?></a>

              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>