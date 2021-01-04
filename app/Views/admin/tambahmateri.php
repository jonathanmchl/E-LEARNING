<?= $this->extend('admin/index'); ?>
<?= $this->section('content'); ?>
<div class="wrapper ">
    <div class="main-panel">
    <div class="content">
  
<h2 class="mb-5">Tambah Materi Mata Kuliah</h2>

<form action="" method="post" enctype="multipart/form-data">
<?= csrf_field();?>

  <div class="form-group row">
    <label for="judul" class="col-sm-2 col-form-label">BAB MATERI</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" name="judul" autofocus>

    </div>
   </div>

   <div class="form-group row">
    <label for="judul" class="col-sm-2 col-form-label">JUDUL MATERI</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" name="judul" autofocus>

    </div>
   </div>

   <div class="form-group">
    <label for="exampleFormControlTextarea1">PENJELASAN MATERI</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>

 
 

  <div class="form-group row">
    <label for="cover" class="col-sm-2 col-form-label">FILE MATERI</label>
    <div class="col-sm-2">
    <img src="#" class="img-thumbnail img-preview">

    </div>
    <div class="col-sm-8">
    <div class="custom-file">
  <input type="file" class="custom-file-input" id="cover"name="cover" onchange="previewImg()">
  
  <label class="custom-file-label" for="cover">FILE MATERI</label>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </div>
  </div>
</form>
</div>
</div>
  
<?= $this->endSection(); ?>

