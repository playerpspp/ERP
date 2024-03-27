<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;
use Dompdf\Dompdf;

class Laporan extends BaseController
{

    protected function checkAuth()
    {
        $id_user = session()->get('id');
        $role = session()->get('role');
        if ($id_user != null && $role != 'peminjam') {
            return true;
        } else {
            return false;
        }
    }
    public function index()
    {
    if (!$this->checkAuth()) {
        return redirect()->to(base_url('/home/dashboard'));
    }

        $model=new M_model();
       

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $data['foto']=$model->getRow('user',$where);

        echo view('viewbuku/laporan/filter');

        
    }

    public function print()
    {
    if (!$this->checkAuth()) {
        return redirect()->to(base_url('/home/dashboard'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['data']=$model->filterbuku($awal,$akhir);
        echo view('viewbuku/laporan/kertas_laporan',$data);

        
    }

    public function pdf()
    {
    if (!$this->checkAuth()) {
        return redirect()->to(base_url('/home/dashboard'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['data']=$model->filterbuku($awal,$akhir);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('laporan/kertas_laporan',$data));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>false));
        exit();    

        
    }
  
}
