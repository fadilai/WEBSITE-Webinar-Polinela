<?php 
namespace App\Controllers;

use App\Models\DataWebinar;
use App\Models\DataWebinar2;
use App\Models\DataWebinar3;

class Data extends BaseController
{

    public function __construct()
    {
        $this->data = new DataWebinar();
        $this->data2 = new DataWebinar2();
        $this->data3 = new DataWebinar3();
    }

    public function index()
    {

        
        echo view('/webinar/dashbord', [
            'data' => $this->data->first(),
            'data2' => $this->data2->first(),
            'data3' => $this->data3->first(),
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
    function simpan()
    {
       $dataBerkas = $this->request->getFile('gambar');
       $fileName = $dataBerkas->getName();

        $this->data->save([
            'id' => $this->request->getVar('id'),
            'judul' => $this->request->getVar('judul'),
            'gambar' => $fileName,
            'tanggal' => $this->request->getVar('tanggal'),
            'teks' => $this->request->getVar('teks'),
        ]);

        $dataBerkas->move('assets/gambar/', $fileName);
        return redirect()->to('data/add');
        }


    public function get_edit($id)
    {            
        $result =  $this->data->where(['id' => $id])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = [
                'id' => $i['id'],
                'judul' => $i['judul'],
                'gambar' =>$i['$fileName'],
                'tanggal' => $i['tanggal'],
                'teks' => $i['teks'],
            ];
         
            return view('webinar/edit_view', $data);
        } else {
            echo "Data Was Not Found";
        }
       
    }

    
    public function view()
    {
        echo view('/webinar/view', [
            'data' => $this->data->first(),
            'data2' => $this->data2->first(),
            'data3' => $this->data3->first(),
        ]);
        
    }
    function update()
    {
        $this->data->save([
            'id' => $this->request->getVar('id'),
            'judul' => $this->request->getVar('judul'),
            'gambar' => $this->request->getPost('gambar'),
            'tanggal' => $this->request->getVar('tanggal'),
            'teks' => $this->request->getVar('teks'),
        ]);
        return redirect()->to('data/add');
    }

    public function delete($id)
    {
        $this->data->delete($id);

        session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
        return redirect()->to('data/view');
    }

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

    public function delete2($id2)
    {
        $this->data2->delete2($id2);

        session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
        return redirect()->to('data/view');
    }


    ////datawebinar3
    function simpan3()
    {
       
        $dataBerkas3 = $this->request->getFile('gambar3');
       $fileName = $dataBerkas3->getRandomName();

        $this->data3->save([
            'id3' => $this->request->getVar('id3'),
            'judul3' => $this->request->getVar('judul3'),
            'gambar3' => $fileName,
            'tanggal3' => $this->request->getVar('tanggal3'),
            'teks3' => $this->request->getVar('teks3'),
        ]);

        $dataBerkas3->move('assets/gambar3/', $fileName);
        return redirect()->to('data/index');
        }

    public function get_edit3($id3)
    {
        $result =  $this->data3->where(['id3' => $id3])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data3 = [
                'id3' => $i['id3'],
                'judul3' => $i['judul3'],
                'gambar3' => $i['gambar3'],
                'tanggal3' => $i['tanggal3'],
                'teks3' => $i['teks3'],
            ];
            return view('webinar/edit_view', $data3);
        } else {
            echo "Data Was Not Found";
        }
    }


    function update3()
    {
        $this->data3->save([
            'id3' => $this->request->getVar('id3'),
            'judul3' => $this->request->getVar('judul3'),
            'gambar3' => $this->request->getPost('gambar3'),
            'tanggal3' => $this->request->getVar('tanggal3'),
            'teks3' => $this->request->getVar('teks3'),
        ]);
        return redirect()->to('data');
    }

    public function delete3($id3)
    {
        $this->data3->delete3($id3);

        session()->setFlashdata('pesanDelete', 'Data berhasil dihapus..');
        return redirect()->to('data/view');
    }

    ///Registrasi Peserta
    public function registry(){

        echo view('webinar/registry');
    }
}
