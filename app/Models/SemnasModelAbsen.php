<?php

namespace App\Models;

use CodeIgniter\Model;

class SemnasModelAbsen extends Model
{
    //Inisialisasi
    protected $table = 'semnas_absen';
    protected $allowedFields = ['email','nama','insek','wa', 'tanggal'];

    //Query Read
    public function getData()
    {
        $query = $this->table('semnas_absen')->query('select * from semnas_absen');
        return $query->getResult();
    }

    //Query Reset
    public function getReset()
    {
        $query = $this->table('semnas_absen')->query('set @num := 0;');
        $query = $this->table('semnas_absen')->query('update semnas_absen set id = @num := (@num+1);');
        $query = $this->table('semnas_absen')->query('alter table semnas_absen AUTO_INCREMENT =1;');
        return $query->getResult();
    }

    //Query Main Search
    public function search($keyword){
        $query = $this->table('semnas_absen')->like('nama', $keyword);
        return $query;
    }

    //Query Admin Search
    public function searchAdmin($key)
    {
        $query = $this->table('semnas_absen')->like('nama', $key);
        return $query;
    }
}

?>