<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Iuran_Model;

class iuran extends Controller
{
    public function index()
   {
    $model = new Iuran_Model;
    $data['title']     = 'Daftar iuran';
    $data['getiuran'] = $model->getiuran();
    echo view('iuran_view', $data);
    //echo view('header_view', $data);
    //echo view('footer_view', $data);
    $title = 'Daftar warga';
    $model = new Iuran_Model();
    $warga = $model->findAll();
    //return view('warga/index', compact('warga', 'title'));
    
   }
   public function tambah()
    {
        $data['title']     = 'Tambah Data iuran';
        echo view('tambah_iuran', $data);
    }
    public function add()
    {
        $model = new Iuran_Model;
        $data = array(
            'id'           => $this->request->getPost('id'),
            'warga_id'         => $this->request->getPost('id'),
            'tanggal'      => $this->request->getPost('tanggal'),
            'bulan'       => $this->request->getPost('bulan'),
            'tahun'     => $this->request->getPost('tahun'),
            'keterangan'       => $this->request->getPost('keterangan')
        );
        $model->saveiuran($data);
        echo '<script>
                alert("Sukses Tambah Data Iuran");
                window.location="'.base_url('iuran').'"
            </script>';

    }
    public function hapus($id)
    {
        $model = new Iuran_Model;
        $getiuran = $model->getiuran($id)->getRow();
        if(isset($getiuran))
        {
            $model->hapusiuran($id);
            echo '<script>
                    alert("Hapus Data Iuran Sukses");
                    window.location="'.base_url('iuran').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID warga '.$id.' Tidak ditemukan");
                    window.location="'.base_url('iuran').'"
                </script>';
        }
    }
} 
?>