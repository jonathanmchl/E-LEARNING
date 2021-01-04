<?= $this->extend('admin/index'); ?>
<?= $this->section('content'); ?>

<div class="wrapper ">
    <div class="main-panel">
        <div class="content">
            <form action="/MatkulController/update/<?= $matkul['id']; ?>" method="post">
                <div class="row g-3">
                    <div class="col-sm">
                        <label for="kategori">Kategori</label>
                        <!-- <input type="text" class="form-control" placeholder="City" aria-label="City"> -->
                        <select class="form-control" id="kategori" name="kategori" value="<?= $matkul['kategori']; ?>" aria-label="State" class="form-select">
                            <option selected>Choose...</option>
                            <option value="Teori">Teori</option>
                            <option value="Responsi">Responsi</option>
                            <option value="Praktikum">Praktikum</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label for="nama_matkul">Nama Matkul</label>
                        <input type="text" class="form-control" placeholder="Web Lanjut" id="nama_matkul" name="nama_matkul" value="<?= $matkul['nama_matkul']; ?>">
                    </div>
                    <div class="col-sm">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" placeholder="kelas" id="name" name="kelas" value="<?= $matkul['kelas']; ?>" class="form-select">
                            <option selected>Choose...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="A dan B">A dan B</option>
                            <option value="Peminatan">Peminatan</option>
                        </select>
                    </div>
                    <div class="col-sm">
                        <label for="pengajar">Pengajar</label>
                        <input type="text" class="form-control" placeholder="Rizky Prabowo" id="pengajar" name="pengajar" value="<?= $matkul['pengajar']; ?>">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>>

<?= $this->endSection(); ?>