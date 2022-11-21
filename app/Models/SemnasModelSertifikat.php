<?php

namespace App\Models;

use CodeIgniter\Model;

class SemnasModelSertifikat extends Model
{
    //Inisialisasi
    protected $table = 'sertifikat';
    protected $allowedFields = ['judul','link', 'caption', 'jam'];

    //Query Read
    public function getData()
    {
        $query = $this->table('sertifikat')->query('select * from sertifikat');
        return $query->getResult();
    }

    //Query Reset
    public function getReset()
    {
        $query = $this->table('sertifikat')->query('set @num := 0;');
        $query = $this->table('sertifikat')->query('update sertifikat set id = @num := (@num+1);');
        $query = $this->table('sertifikat')->query('alter table sertifikat AUTO_INCREMENT =1;');
        return $query->getResult();
    }

    //Query Main Search
    public function search($keyword){
        $query = $this->table('sertifikat')->like('judul', $keyword);
        return $query;
    }

    //Query Admin Search
    public function searchAdmin($key)
    {
        $query = $this->table('sertifikat')->like('judul', $key);
        return $query;
    }
}

?>