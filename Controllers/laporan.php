<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Iuran_Model;

class laporan extends Controller
{
    public function index()
   {
    $model = new Iuran_Model;
    $data['title']     = 'Daftar Laporan';
    $data['getiuran'] = $model->getiuran();
    echo view('laporan_view', $data);
    //echo view('header_view', $data);
    //echo view('footer_view', $data);
    $title = 'Daftar Laporan';
    $model = new Iuran_Model();
    $warga = $model->findAll();
    //return view('warga/index', compact('warga', 'title'));
    
   }
   
} 
?>