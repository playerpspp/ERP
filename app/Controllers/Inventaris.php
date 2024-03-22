<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class Inventaris extends BaseController
{

    protected function checkAuth($lock)
{
    $id_user = session()->get('id_user');
    $level = session()->get('role');

    if ($level == 'admin') {
        return true; // Admin can access anything
    }

    switch ($lock) {
        case 'admin':
        case 'teacher':
        case 'petugas':
        case 'student':
            if ($id_user != null && $level == $lock) {
                return true;
            } else {
                return false;
            }
        case 'everyone':
            if ($id_user != null) {
                return true;
            } else {
                return false;
            }
        default:
            return false; // Handle other cases if needed
    }
}


//<------------------------------------------------------Tampilan Dashboard------------------------------------------------------------>

public function index()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }
        $model=new M_model();

        $id=session()->get('id_user');
        $where=array('id_user'=>$id);

        $data['b']=$model->tampil('barang');
        $data['bm']=$model->tampil('barang_masuk');
        $data['p']=$model->tampil('transaksi');
        $data['user']=$model->tampil('user');
        $data['karyawan']=$model->tampil('karyawan');


        echo view('viewpos/header',$data);
        echo view('viewpos/menu');
        echo view('viewpos/dashboard');
        echo view('viewpos/footer');

 
}



//<------------------------------------------------------Tombol Balik---------------------------------------------------->

  
    public function Exit()
    {
        if (!$this->checkAuth("everyone")) {
            return redirect()->to(base_url('/Inventaris'));
        }

         return redirect()->to('/');

     
}



//<------------------------------------------------------Transaksi Tabel--------------------------------------------------------------->

public function t_barang()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $data['duar']=$model->tampil('barang');

        


        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/barang',$data);
        echo view('viewpos/footer');

    
}

public function t_masuk()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $on='barang_masuk.id_brg=barang.id_brg';
        $data['duar']=$model->fusion('barang_masuk','barang',$on);

        


        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/barang_masuk',$data);
        echo view('viewpos/footer');

    
}

public function t_jual()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $on='transaksi.id_brg=barang.id_brg';
        $data['duar']=$model->fusion('transaksi','barang',$on);

        


        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/barang_jual',$data);
        echo view('viewpos/footer');

    
}






//<---------------------------------------------------------Tambah Tabel--------------------------------------------------------------->

public function tambah_b()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $data['duar']=$model->tampil('barang');

        

        
        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/tambah_b',$data);
        echo view('viewpos/footer');

    
}

public function tambah_bm()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $data['duar']=$model->tampil('barang');

        

        
        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/tambah_bm',$data);
        echo view('viewpos/footer');

    
}

public function tambah_trans()
{
    if(session()->get('level')== 4) {
        return redirect()->to('/Inventaris/dashboard');
    }

        $model=new M_model();
        $data['duar']=$model->tampil('barang');

        

        
        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/tambah_trans',$data);
        echo view('viewpos/footer');

    
}



//<---------------------------------------------------------Aksi Tambah Tabel--------------------------------------------------------->

public function aksi_tambah_b()
{
    $model=new M_model();
    $nama=$this->request->getPost('name');
    $kode=$this->request->getPost('kode');
    $harga=$this->request->getPost('harga');
    $id=session()->get('id_user');
    $data=array(
        'nama_brg'=>$nama,
        'kode_brg'=>$kode,
        'harga'=>$harga,
        'stok'=>'0',
        'id_user'=>$id,
    );
    $model->simpan('barang',$data);
    return redirect()->to('/Inventaris/t_barang');
}

public function aksi_tambah_bm()
{
    $model=new M_model();
    $nama=$this->request->getPost('name');
    $jumlah=$this->request->getPost('jumlah');
    $harga=$this->request->getPost('harga');
    $supp=$this->request->getPost('supp');
    $id=session()->get('id_user');
    $data=array(
        'id_brg'=>$nama,
        'jumlah'=>$jumlah,
        'harga'=>$harga,
        'nama_supp'=>$supp,
        'tanggal'=>date('y-m-d'),
        'id_user'=>$id,
    );
    $model->simpan('barang_masuk',$data);
    return redirect()->to('Home/t_masuk');
}


public function aksi_tambah_trans()
{
    $model=new M_model();
    $nama=$this->request->getPost('name');
    $jumlah=$this->request->getPost('jumlah');
    $harga=$this->request->getPost('harga');
    $bill=$this->request->getPost('bill');
    $id=session()->get('id_user');
    $data=array(
        'id_brg'=>$nama,
        'jumlah'=>$jumlah,
        'harga'=>$harga,
        'id_bill'=>$bill,
        'id_user'=>$id,
    );
    $model->simpan('transaksi',$data);
    return redirect()->to('Home/t_jual');
}


//<-------------------------------------------------------Edit Tabel------------------------------------------------------------------->

public function edit_b($id)
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $where=array('id_brg'=>$id);
        $data['gas']=$model->getRow('barang', $where);

        

        
        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/edit_b',$data);
        echo view('viewpos/footer');

    
}



//<----------------------------------------------------Aksi Edit Tabel----------------------------------------------------------------->

public function aksi_edit_b()
{
    $model=new M_model();
    $id=$this->request->getPost('id');
    $nama=$this->request->getPost('name');
    $kode=$this->request->getPost('kode');
    $harga=$this->request->getPost('harga');
    $data=array(
        'nama_brg'=>$nama,
        'kode_brg'=>$kode,
        'harga'=>$harga,
    );
    $where=array('id_brg'=>$id);
    $model->edit('barang',$data,$where);
    return redirect()->to('/Inventaris/t_barang');
}

//<----------------------------------------------------Hapus Tabel--------------------------------------------------------------------->

public function hapus_b($id)
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $where=array('id_brg'=>$id);
        $model->hapus('barang',$where);
        return redirect()->to('Home/t_barang');

    
}

public function hapus_bm($id)
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $where=array('id_msk'=>$id);
        $model->hapus('barang_masuk',$where);
        return redirect()->to('Home/t_masuk');

    
}

public function hapus_bj($id)
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $where=array('id_trans'=>$id);
        $model->hapus('transaksi',$where);
        return redirect()->to('Home/t_jual');

    
}



//<---------------------------------------------------------Laporan Tabel----------------------------------------------------------->

public function l_brg()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $data['kunci']='view_b';

        

        
        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/filter',$data);
        echo view('viewpos/footer');

    
}

public function l_masuk()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $data['kunci']='view_bm';

        

        
        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/filter',$data);
        echo view('viewpos/footer');

    
}

public function l_penjualan()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $data['kunci']='view_p';

        

        
        echo view('viewpos/header',$data);
        echo view('viewpos/menu',$data);
        echo view('viewpos/filter',$data);
        echo view('viewpos/footer');

    
}

//<-----------------------------------------------------------Cari Tabel--------------------------------------------------------------->

public function cari_b()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['duar']=$model->filter_b('barang',$awal,$akhir);
        $img = file_get_contents(
            'C:\BARANG ERP\ERP\public\assets\images\KOP_PH.jpg');

        $data['foto'] = base64_encode($img);

        echo view('viewpos/c_b',$data);

    
}

public function cari_bm()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['duar']=$model->filter_f('barang_masuk',$awal,$akhir);
        $img = file_get_contents(
            'C:\BARANG ERP\ERP\public\assets\images\KOP_PH.jpg');

        $data['foto'] = base64_encode($img);

        echo view('viewpos/c_bm', $data);

    
}

public function cari_p()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['duar']=$model->filter_f('transaksi',$awal,$akhir);
        $img = file_get_contents(
            'C:\BARANG ERP\ERP\public\assets\images\KOP_PH.jpg');

        $data['foto'] = base64_encode($img);

        echo view('viewpos/c_p', $data);

    
}

//<-----------------------------------------------------------Laporan Excel------------------------------------------------------------>


public function excel_b()
{
 if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

    $model=new M_model();
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data_buku= $model->filter_b('barang',$awal,$akhir);
        // echo view('viewpos/excel_print_buku',$data);

    $spreadsheet=new Spreadsheet();
        // tulis header/nama kolom
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Nama Barang')
    ->setCellValue('B1', 'Kode Barang')
    ->setCellValue('C1', 'Harga')
    ->setCellValue('D1', 'Stok')
    ->setCellValue('E1', 'Tanggal')
    ->setCellValue('F1', 'Nama Karyawan');

    $column=2;
        //tulis data
    foreach($data_buku as $data){
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->nama_brg)
        ->setCellValue('B'. $column, $data->kode_brg)
        ->setCellValue('C'. $column, $data->harga)
        ->setCellValue('D'. $column, $data->stok)
        ->setCellValue('E'. $column, $data->tanggal)
        ->setCellValue('F'. $column, $data->nama);
        $column++;
    }
        // tulis dalam format .xlsx
    $writer = new XLsx($spreadsheet);
    $fileName = 'Data Barang';

        // Redirect hasil xlsx ke web client
    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');


}
public function excel_bm()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data_buku=$model->filter_f('barang_masuk',$awal,$akhir);
        // echo view('viewpos/excel_print_pj', $data);

        $spreadsheet=new Spreadsheet();
        // tulis header/nama kolom
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nama Barang')
        ->setCellValue('B1', 'Jumlah')
        ->setCellValue('C1', 'Harga')
        ->setCellValue('D1', 'Nama Supplier')
        ->setCellValue('E1', 'Tanggal')
        ->setCellValue('F1', 'Nama Karyawan');

        $column=2;
        //tulis data
        foreach($data_buku as $data){
            $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A'. $column, $data->nama_brg)
            ->setCellValue('B'. $column, $data->jumlah)
            ->setCellValue('C'. $column, $data->harga)
            ->setCellValue('D'. $column, $data->nama_supp)
            ->setCellValue('E'. $column, $data->tanggal)
            ->setCellValue('F'. $column, $data->nama);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new XLsx($spreadsheet);
        $fileName = 'Data Barang Masuk';

        // Redirect hasil xlsx ke web client
        header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment;filename='.$fileName.'.xls');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');

    
}
public function excel_p()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data_buku=$model->filter_f('transaksi',$awal,$akhir);
        // echo view('viewpos/excel_print_pg', $data);

        $spreadsheet=new Spreadsheet();
        // tulis header/nama kolom
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nama Barang')
        ->setCellValue('B1', 'Jumlah')
        ->setCellValue('C1', 'Harga')
        ->setCellValue('D1', 'Tanggal')
        ->setCellValue('E1', 'Nama Karyawan');

        $column=2;
        //tulis data
        foreach($data_buku as $data){
            $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A'. $column, $data->nama_brg)
            ->setCellValue('B'. $column, $data->jumlah)
            ->setCellValue('C'. $column, $data->harga)
            ->setCellValue('D'. $column, $data->tanggal)
            ->setCellValue('E'. $column, $data->nama);
            $column++;
        }
        // tulis dalam format .xlsx
        $writer = new XLsx($spreadsheet);
        $fileName = 'Data Transaksi';

        // Redirect hasil xlsx ke web client
        header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition:attachment;filename='.$fileName.'.xls');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');

    
}


//<-----------------------------------------------------------Laporan PDF-------------------------------------------------------------->

public function pdf_b()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['duar']=$model->filter_b('barang',$awal,$akhir);
        $img = file_get_contents(
            'C:\BARANG ERP\ERP\public\assets\images\KOP_PH.jpg');

        $data['foto'] = base64_encode($img);

        $dompdf = new Dompdf();
        $dompdf->set_option('isRemoteEnabled', TRUE);

        $dompdf->loadHtml(view('viewpos/c_b',$data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Daftar Buku.pdf',array('Attachment'=>0));
        
    
}

public function pdf_bm()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['duar']=$model->filter_f('barang_masuk',$awal,$akhir);
        $img = file_get_contents(
            'C:\BARANG ERP\ERP\public\assets\images\KOP_PH.jpg');

        $data['foto'] = base64_encode($img);

        $dompdf = new Dompdf();
        $dompdf->set_option('isRemoteEnabled', TRUE);

        $dompdf->loadHtml(view('viewpos/c_bm',$data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Daftar Pinjaman.pdf',array('Attachment'=>0));

    
    
}

public function pdf_p()
{
    if (!$this->checkAuth("everyone")) {
        return redirect()->to(base_url('/Inventaris'));
    }

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $data['duar']=$model->filter_f('transaksi',$awal,$akhir);
        $img = file_get_contents(
            'C:\BARANG ERP\ERP\public\assets\images\KOP_PH.jpg');

        $data['foto'] = base64_encode($img);

        $dompdf = new Dompdf();
        $dompdf->set_option('isRemoteEnabled', TRUE);

        $dompdf->loadHtml(view('viewpos/c_p',$data));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Daftar Pengembalian.pdf',array('Attachment'=>0));

    
}
//<-----------------------------------------------------------Penutup------------------------------------------------------------------->



}







