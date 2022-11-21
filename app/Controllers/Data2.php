<?php 
namespace App\Controllers;

use App\Models\DataWebinar2;

class Data2 extends BaseController
{

    public function __construct()
    { 
        $this->data2 = new DataWebinar2();
    }

    public function index()
    {

        
        echo view('/webinar/dashbord', [
            'data2' => $this->data2->first(),
        ]);
    }

    ////Tambah data
    public function add()
    {
       
        echo view('/webinar/add_view');
    }

    public function add2()
    {
       
        echo view('/webinar/add_view2');
    }
    
    public function add3()
    {
       
        echo view('/webinar/add_view3');
    }
    
    
    public function edit()
    {
        echo view('/webinar/edit_view', [
            'data' => $this->data->findAll(),
            
        ]);
    }
     

    // public function absen()
    // {
    //     echo view('/webinar/absen_view');
    // }

    public function absen_form()
    {
        echo view('webinar/absen_form');
    }

    public function sertifikat()
    {
        echo view('/webinar/sertifikat_view');
    }

    public function materi()
    {
        echo view('/webinar/materi');
    }

    public function webinar_detail1()
    {
        echo view('/webinar/webinar_detail1', [
            'data' => $this->data->first()
        ]);
    }

    public function webinar_detail2()
    {
        echo view('/webinar/webinar_detail2', [
            'data2' => $this->data2->first()
        ]);
    }

    public function webinar_detail3()
    {
        echo view('/webinar/webinar_detail3', [
            'data3' => $this->data3->first()
        ]);
    }
    

///datawebinar1

    public function logout()
    {
        echo view('login/login');
    }


    ////datawebinar2
    function simpan2()
    {
       
        $dataBerkas2 = $this->request->getFile('gambar2');
        $fileName = $dataBerkas2->getRandomName();
 
         $this->data2->save([
             'id2' => $this->request->getVar('id2'),
             'judul2' => $this->request->getVar('judul2'),
             'gambar2' => $fileName,
             'tanggal2' => $this->request->getVar('tanggal2'),
             'teks2' => $this->request->getVar('teks2'),
         ]);
 
         $dataBerkas2->move('assets/gambar2/', $fileName);
         return redirect()->to('data/add2');
         }

    public function get_edit2($id2)
    {
        $result =  $this->data2->where(['id2' => $id2])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data2 = [
                'id2' => $i['id2'],
                'judul2' => $i['judul2'],
                'gambar2' => $i['gambar2'],
                'tanggal2' => $i['tanggal2'],
                'teks2' => $i['teks2'],
            ];
            return view('webinar/edit_view', $data2);
        } else {
            echo "Data Was Not Found";
        }
    }


    function update2()
    {
        $this->data2->save([
            'id2' => $this->request->getVar('id2'),
            'judul2' => $this->request->getVar('judul2'),
            'gambar2' => $this->request->getPost('gambar2'),
            'tanggal2' => $this->request->getVar('tanggal2'),
            'teks2' => $this->request->getVar('teks2'),
        ]);
        return redirect()->to('data/view');
    }

    public function delete($id2)
    {
        $this->data->delete($id2);

        session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
        return redirect()->to('data/view');
    }


    ///Registrasi Peserta
    public function registry(){

        echo view('webinar/registry');
    }

    ///Kirim sertifikat
    public function kirim_sertifikat(){

    }

}
