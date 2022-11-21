<?php

namespace App\Models;

use CodeIgniter\Model;

class DataWebinar extends Model
{
    protected $table = 'datawebinar';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'judul',
        'gambar',
        'tanggal',
        'teks'
    ];

}