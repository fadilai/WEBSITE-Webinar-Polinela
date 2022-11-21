<?php

namespace App\Controllers;
use App\Models\SemnasModelMateri;


class SemnasMateri extends BaseController
{

    //Inheritance
    protected $semnasModelMateri;
    public function __construct(){
        $this->semnasModelMateri = new SemnasModelMateri();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $semnasmateri = $this->semnasModelMateri->search($keyword);
        }
        else{
            $semnasmateri = $this->semnasModelMateri;
        }
        
        $data = [
            'semnasmateri' => $semnasmateri->paginate(5, 'semnasmateri'),
            'pager' => $this->semnasModelMateri->pager,
            'curpage' => $curpage
        ];
        return view('webinar/admin_materi', $data);
    }

    public function index2()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $semnasmateri = $this->semnasModelMateri->search($keyword);
        }
        else{
            $semnasmateri = $this->semnasModelMateri;
        }
        
        $data = [
            'semnasmateri' => $semnasmateri->paginate(100, 'semnasmateri'),
            'pager' => $this->semnasModelMateri->pager,
            'curpage' => $curpage
        ];
        return view('webinar/materi', $data);
    }

    //Method Save
    public function save()
    {
        $this->semnasModelMateri->save([
            'judul' => $this->request->getVar('judul'),
            'link1' => $this->request->getVar('link1'),
            'caption1' => $this->request->getVar('caption1'),
            'link2' => $this->request->getVar('link2'),
            'caption2' => $this->request->getVar('caption2')

            
        ]);

        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan..');
        return redirect()->to('/semnasmateri');
    }
}
