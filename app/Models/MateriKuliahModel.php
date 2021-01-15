<?php

namespace App\Models;

use CodeIgniter\Model;

class MaterikuliahModel extends Model
{
    protected $table = 'materikuliah';
    // protected $useTimestamps = true;
    protected $allowedFields = ['id_materi', 'bab', 'judul', 'penjelasan', 'file'];

    public function getMaterikuliah($id_materi = false) //defaultnya false
    {
        if ($id_materi === false) { //tidak ada idnya, cari semua
            return $this->findAll();
        }

        return $this->where(['id_materi' => $id_materi])->first(); // jika ada, tampilkan data yang di pilih
    }
}