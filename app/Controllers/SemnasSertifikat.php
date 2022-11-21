<?php

namespace App\Controllers;
use App\Models\SemnasModelSertifikat;


class SemnasSertifikat extends BaseController
{

    //Inheritance
    protected $semnasModelSertifikat;
    public function __construct(){
        $this->semnasModelSertifikat = new SemnasModelSertifikat();
    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $sertifikat = $this->semnasModelSertifikat->search($keyword);
        }
        else{
            $sertifikat = $this->semnasModelSertifikat;
        }
        
        $data = [
            'sertifikat' => $sertifikat->paginate(5, 'sertifikat'),
            'pager' => $this->semnasModelSertifikat->pager,
            'curpage' => $curpage
        ];
        return view('webinar/admin_sertifikat', $data);
    }

    public function index2()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword){
            $sertifikat = $this->semnasModelSertifikat->search($keyword);
        }
        else{
            $sertifikat = $this->semnasModelSertifikat;
        }
        
        $data = [
            'sertifikat' => $sertifikat->paginate(5, 'sertifikat'),
            'pager' => $this->semnasModelSertifikat->pager,
            'curpage' => $curpage
        ];
        return view('webinar/sertifikat_view', $data);
    }


    //Method Save
    public function save()
    {
        $this->semnasModelSertifikat->save([
            'judul' => $this->request->getVar('judul'),
            'link' => $this->request->getVar('link'),
            'caption' => $this->request->getVar('caption'),
            'jam' => $this->request->getVar('jam')



            
        ]);

        session()->setFlashdata('Pesan', 'Data berhasil ditambahkan..');
        return redirect()->to('semnassertifikat');
    }

     //Method Update
     public function update($id)
     {
        $this->semnasModelSertifikat->save([
            'judul' => $this->request->getVar('judul'),
            'link' => $this->request->getVar('link'),
            'caption' => $this->request->getVar('caption')

            
        ]);
 
         session()->setFlashdata('pesanUpdate', 'Data berhasil dirubah..');
         return redirect()->to('/admin');    
     }
 
 
     //Method Edit
     public function get_edit($id)
     {
         $result =  $this->adminModel->where(['id' => $id]);
         if ($result->getNumRows() > 0) {
             $dt = $result->getRowArray();
             $adminModel = [
                 'id' => $dt['id'],
                 'email' => $dt['email'],
                 'nama' => $dt['nama'],
                 'insek' => $dt['insek'],
                 'wa' => $dt['wa'],
             ];
             return view('webinar/admin', $adminModel);
         } else {
             echo "Data Was Not Found";
         }
     }
 
     //Method Delete
     public function delete($id)
     {
         $this->adminModel->delete($id);
 
         session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
         return redirect()->to('/semnassertifikat');
     }
}
