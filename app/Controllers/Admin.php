<?php

namespace App\Controllers;
use App\Models\SemnasModel;

class Admin extends BaseController
{

    //Inheritance
    protected $adminModel;
    public function __construct(){
        $this->adminModel = new SemnasModel();

    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $key = $this->request->getVar('key');
        if ($key){
            $semnas = $this->adminModel->searchAdmin($key);
        }
        else{
            $semnas = $this->adminModel;
        }
        
        $data = [
            'semnas' => $semnas->paginate(100, 'semnas'),
            'pager' => $this->adminModel->pager,
            'curpage' => $curpage
        ];
        return view('webinar/admin', $data);
    }

    public function add_peserta()
    {
       
        echo view('/webinar/add_peserta');
    }

    //Method Save
    public function save()
    {
        $this->adminModel->save([
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'insek' => $this->request->getVar('insek'),
            'wa' => $this->request->getVar('wa')
        ]);

        session()->setFlashdata('pesanAdd', 'Data berhasil ditambahkan..');
        return redirect()->to('/admin');
    }

    //Method Update
    public function update($id)
    {
        $this->adminModel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'insek' => $this->request->getVar('insek'),
            'wa' => $this->request->getVar('wa')
        ]);

        session()->setFlashdata('pesanUpdate', 'Data berhasil dirubah..');
        return redirect()->to('/admin');    
    }


    // //Method Edit
    // public function get_edit($id)
    // {
    //     $result =  $this->adminModel->where(['id' => $id]);
    //     if ($result->getNumRows() > 0) {
    //         $dt = $result->getRowArray();
    //         $adminModel = [
    //             'id' => $dt['id'],
    //             'email' => $dt['email'],
    //             'nama' => $dt['nama'],
    //             'insek' => $dt['insek'],
    //             'wa' => $dt['wa'],
    //         ];
    //         return view('webinar/admin', $adminModel);
    //     } else {
    //         echo "Data Was Not Found";
    //     }
    // }

    //Method Delete
    public function delete($id)
    {
        $this->adminModel->delete($id);

        session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
        return redirect()->to('/admin');
    }

    //Method Export Excel
    public function excel()
    {
        $data = [
            'semnas' => $this->adminModel->getData()
        ];

        return view('admin/excel', $data);
    }

    //Method Print
    public function print()
    {
        $data = [
            'semnas' => $this->adminModel->getData()
        ];

        return view('admin/print', $data);
    }



    // //Method Read Absen
    // public function index2()
    // {
    //     $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

    //     $key = $this->request->getVar('key');
    //     if ($key){
    //         $semnasAbsen = $this->adminModel->searchAdmin($key);
    //     }
    //     else{
    //         $semnasAbsen = $this->adminModel;
    //     }
        
    //     $data = [
    //         'semnasAbsen' => $semnasAbsen->paginate(100, 'semnasAbsen'),
    //         'pager' => $this->adminModel->pager,
    //         'curpage' => $curpage
    //     ];
    //     return view('webinar/admin', $data);
    // }

    // //Method Save
    // public function save2()
    // {
    //     $this->adminModelAbsen->save2([
    //         'email' => $this->request->getVar('email'),
    //         'nama' => $this->request->getVar('nama'),
    //         'insek' => $this->request->getVar('insek'),
    //         'wa' => $this->request->getVar('wa'),
    //         'tanggal' => $this->request->getVar('tanggal')

    //     ]);

    //     session()->setFlashdata('pesanAdd', 'Data berhasil ditambahkan..');
    //     return redirect()->to('/admin');
    // }

}
