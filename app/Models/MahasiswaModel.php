<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'orang';
    protected $allowedFields = ['nim', 'nama', 'kota', 'ttl', 'ortu', 'aortu', 'kodePos', 'nomor', 'status'];
}
