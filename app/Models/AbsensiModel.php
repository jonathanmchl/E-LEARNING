<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table = 'absensi';
    // protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama', 'npm', 'keterangan'];
}