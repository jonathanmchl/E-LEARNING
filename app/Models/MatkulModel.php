<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'matkul';
    // protected $useTimestamps = true;
    protected $allowedFields = ['kategori', 'nama_matkul', 'kelas', 'pengajar'];

    public function getMatkulController($id = false) //defaultnya false
    {
        if ($id === false) { //tidak ada idnya, cari semua
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first(); // jika ada, tampilkan data yang di pilih
    }
}
