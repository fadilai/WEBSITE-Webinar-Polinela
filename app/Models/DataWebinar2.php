<?php

namespace App\Models;

use CodeIgniter\Model;

class DataWebinar2 extends Model
{
    protected $table = 'datawebinar2';
    protected $primarykey = 'id2';
    protected $allowedFields = [
        'judul2',
        'gambar2',
        'tanggal2',
        'teks2'
    ];

}