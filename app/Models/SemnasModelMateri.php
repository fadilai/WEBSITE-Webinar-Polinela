<?php

namespace App\Models;

use CodeIgniter\Model;

class SemnasModelMateri extends Model
{
    //Inisialisasi
    protected $table = 'semnas_materi';
    protected $allowedFields = ['judul','link1', 'caption1', 'link2','caption2'];

    //Query Read
    public function getData()
    {
        $query = $this->table('semnas_materi')->query('select * from semnas_materi');
        return $query->getResult();
    }

    //Query Reset
    public function getReset()
    {
        $query = $this->table('semnas_materi')->query('set @num := 0;');
        $query = $this->table('semnas_materi')->query('update semnas_materi set id = @num := (@num+1);');
        $query = $this->table('semnas_materi')->query('alter table semnas_materi AUTO_INCREMENT =1;');
        return $query->getResult();
    }

    //Query Main Search
    public function search($keyword){
        $query = $this->table('semnas_materi')->like('nama', $keyword);
        return $query;
    }

    //Query Admin Search
    public function searchAdmin($key)
    {
        $query = $this->table('semnas_materi')->like('nama', $key);
        return $query;
    }
}

?>