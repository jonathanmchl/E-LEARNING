<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'matkul';
    protected $primary = 'id';
    // protected $useTimestamps = true;
    protected $allowedFields = ['kategori', 'nama_matkul', 'kelas', 'pengajar'];

    public function getMatkulController($id = false) //defaultnya false
    {
        if ($id === false) { //tidak ada idnya, cari semua
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first(); // jika ada, tampilkan data yang di pilih
    }

    public function hitung()
    {
       $db = db_connect();
       $query = $db->query("SELECT COUNT('user_name') AS cnt FROM `users` WHERE user_level= 2")->getRow(0)->cnt;
        return $query;
     }
     public function hitungdosen()
     {
        $db = db_connect();
        $query = $db->query("SELECT COUNT('user_name') AS cnt FROM `users` WHERE user_level= 1")->getRow(0)->cnt;
         return $query;
      }
      public function total()
      {
         $db = db_connect();
         $query = $db->query("SELECT COUNT('user_name') AS cnt FROM `users` ")->getRow(0)->cnt;
          return $query;
       }
       public function mata()
       {
          $db = db_connect();
          $query = $db->query("SELECT COUNT('nama_matkul') AS cnt FROM `matkul` ")->getRow(0)->cnt;
           return $query;
        }

}