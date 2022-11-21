<?php

namespace App\Models;

use CodeIgniter\Model;

class DataWebinar3 extends Model
{
    protected $table = 'datawebinar3';
    protected $primarykey = 'id3';
    protected $allowedFields = [
        'judul3',
        'gambar3',
        'tanggal3',
        'teks3'
    ];

}