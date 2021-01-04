<?= $this->extend('admin/index'); ?>
<?= $this->section('content'); ?>
<div class="wrapper ">
    <div class="main-panel">
        <div class="content">
            <a href="/create/" class="btn btn-success mt-0"> Tambah Data</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama Matkul</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Pengajar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($matkul as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <th scope="row"><?= $m['kategori']; ?></th>
                            <td><?= $m['nama_matkul']; ?></td>
                            <td><?= $m['kelas']; ?></td>
                            <td><?= $m['pengajar']; ?></td>
                            <td>
                                <a href="/edit/<?= $m['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="#<?= $m['id']; ?>" class="btn btn-primary">View</a>
                                <form action="/matkul/<?= $m['id']; ?>" method="post" class="d-inline">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>