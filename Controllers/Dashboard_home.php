<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Warga_Model;
use App\Models\Iuran_Model;

class Dashboard_home extends BaseController
{
    public function index()
    {
     $model = new Warga_Model;
     $data['title']     = 'Daftar Warga';
     $data['getwarga'] = $model->getwarga();
     echo view('warga_view', $data);
     //echo view('header_view', $data);
     //echo view('footer_view', $data);
     $title = 'Daftar warga';
     $model = new Warga_Model();
     $warga = $model->findAll();
         //return view('warga/index', compact('warga', 'title'));
    }
    public function tambah()
     {
         $data['title']     = 'Tambah Data Warga';
         echo view('tambah_view', $data);
     }
     public function add()
     {
         $model = new Warga_Model;
         $data = array(
             'id'           => $this->request->getPost('id'),
             'nik'          => $this->request->getPost('nik'),
             'nama'         => $this->request->getPost('nama'),
             'kelamin'      => $this->request->getPost('kelamin'),
             'alamat'       => $this->request->getPost('alamat'),
             'no_rumah'     => $this->request->getPost('no_rumah'),
             'status'       => $this->request->getPost('status')
         );
         $model->savewarga($data);
         echo '<script>
                 alert("Sukses Tambah Data Warga");
                 window.location="'.base_url('warga').'"
             </script>';
 
     }
     public function edit($id)
     {
         $model = new Warga_Model;
         $getwarga = $model->getwarga($id)->getRow();
         if(isset($getwarga))
         {
             $data['warga'] = $getwarga;
             $data['title']  = 'Edit '.$getwarga->nik;
 
             //echo view('header_view', $data);
             echo view('edit_view', $data);
             //echo view('footer_view', $data);
 
         }else{
 
             echo '<script>
                     alert("id '.$id.' Tidak ditemukan");
                     window.location="'.base_url('warga').'"
                 </script>';
         }
     }
     public function update()
     {
         $model = new Warga_Model;
         $id = $this->request->getPost('id');
         $data = array(
             'nik'          => $this->request->getPost('nik'),
             'nama'         => $this->request->getPost('nama'),
             'kelamin'      => $this->request->getPost('kelamin'),
             'alamat'       => $this->request->getPost('alamat'),
             'no_rumah'     => $this->request->getPost('no_rumah'),
             'status'       => $this->request->getPost('status')
         );
         $model->editwarga($data,$id);
         echo '<script>
                 alert("Sukses Edit Data Warga");
                 window.location="'.base_url('Warga').'"
             </script>';
     }
 
     public function hapus($id)
     {
         $model = new Warga_Model;
         $getwarga = $model->getwarga($id)->getRow();
         if(isset($getwarga))
         {
             $model->hapuswarga($id);
             echo '<script>
                     alert("Hapus Data Warga Sukses");
                     window.location="'.base_url('warga').'"
                 </script>';
 
         }else{
 
             echo '<script>
                     alert("Hapus Gagal !, ID warga '.$id.' Tidak ditemukan");
                     window.location="'.base_url('warga').'"
                 </script>';
         }
     }
 } 
 ?>