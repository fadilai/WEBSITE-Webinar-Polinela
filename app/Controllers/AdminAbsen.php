<?php

namespace App\Controllers;
use App\Models\SemnasModelAbsen;

class AdminAbsen extends BaseController
{

    //Inheritance
    protected $adminModelAbsen;
    public function __construct(){
        $this->adminModelAbsen = new SemnasModelAbsen();

    }

    //Method Read
    public function index()
    {
        $curpage = $this->request->getVar('page_semnas') ? $this->request->getVar('page_semnas') : 1;

        $key = $this->request->getVar('key');
        if ($key){
            $semnasabsen = $this->adminModelAbsen->searchAdmin($key);
        }
        else{
            $semnasabsen = $this->adminModelAbsen;
        }
        
        $data = [
            'semnasabsen' => $semnasabsen->paginate(100, 'semnas'),
            'pager' => $this->adminModelAbsen->pager,
            'curpage' => $curpage
        ];
        return view('webinar/admin_absen', $data);
    }


    //Method Save
    public function save()
    {
        $this->adminModelAbsen->save([
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'insek' => $this->request->getVar('insek'),
            'wa' => $this->request->getVar('wa'),
            'tanggal' => $this->request->getVar('tanggal')


        ]);

        session()->setFlashdata('pesanAdd', 'Data berhasil ditambahkan..');
        return redirect()->to('/adminabsen');
    }

   



    //Method Delete
    public function delete($id)
    {
        $this->adminModelAbsen->delete($id);

        session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
        return redirect()->to('/adminabsen');
    }

    //Method Export Excel
    public function excel()
    {
        $data = [
            'semnasabsen' => $this->adminModelAbsen->getData()
        ];

        return view('adminabsen/excel', $data);
    }

    //Method Print
    public function print()
    {
        $data = [
            'semnasabsen' => $this->adminModelAbsen->getData()
        ];

        return view('adminabsen/print', $data);
    }


}
