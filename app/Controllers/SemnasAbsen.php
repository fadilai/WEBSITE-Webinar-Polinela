<?php

namespace App\Controllers;
use App\Models\SemnasModelAbsen;

class SemnasAbsen extends BaseController
{

    //Inheritance
    protected $semnasModelAbsen;
    public function __construct(){
        $this->semnasModelAbsen = new SemnasModelAbsen();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $semnasabsen = $this->semnasModel->search($keyword);
        }
        else{
            $semnasabsen = $this->semnasModel;
        }
        
        $data = [
            'semnasabsen' => $semnasabsen->paginate(100, 'semnasabsen'),
            'pager' => $this->semnasModel->pager,
            'curpage' => $curpage
        ];
        return view('main/semnas', $data);
    }

    //Method Save
    public function save()
    {
        $this->semnasModelAbsen->save([
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'insek' => $this->request->getVar('insek'),
            'wa' => $this->request->getVar('wa'),
            'tanggal' => $this->request->getVar('tanggal')


        ]);

        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan..');
        return redirect()->to('semnassertifikat/index2');
    }
   
    public function reset ()
    {
        $this->semnasModelAbsen->reset([

        ]);
    }


}
