<?php

namespace App\Controllers;

use App\Models\M_model;

class Petugas extends BaseController
{
    protected function checkAuth()
    {
        $id_user = session()->get('id');
        $role = session()->get('role');
        if ($id_user != null && $role == 'admin') {
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

        $model = new M_model();
        $data['data']= $model->getWhere('users',['role !=' => 'peminjam']);
        echo view('viewbuku/petugas/petugas',$data);
    }

    public function input_petugas()
    {
         if (!$this->checkAuth()) {
            return redirect()->to(base_url('/home/dashboard'));
        }

        $model = new M_model();
        echo view('viewbuku/petugas/input');
    }

    public function aksi_input()
    {
         if (!$this->checkAuth()) {
            return redirect()->to(base_url('/home/dashboard'));
        }

       
        $namaLengkap=$this->request->getPost('nama_pegawai');
        $email=$this->request->getPost('email');
        $alamat=$this->request->getPost('alamat');
        $username=$this->request->getPost('username');
        $role=$this->request->getPost('role');
        $maker_pegawai=session()->get('id');

        $user=array(
            'username'=>$username,
            'password'=>md5('halo#12345'),
            'role'=>$role,
            'alamat'=>$alamat,
            'email'=>$email,
            'namaLengkap'=> $namaLengkap
        );

        $model=new M_model();
        $model->simpan('users', $user);
        
        $log = array(
            'isi_log' => 'user menambahkan data petugas',
            'log_idUser' => $maker_pegawai,
            
        );

        $model->simpan('log', $log);
        return redirect()->to('/petugas');

    }


    public function edit($id)
    {
         if (!$this->checkAuth()) {
            return redirect()->to(base_url('/home/dashboard'));
        }

        $model = new M_model();
        $data['data']= $model->getRow('users',['id_user ' => $id]);
        echo view('viewbuku/petugas/edit',$data);
    }

    public function aksi_edit()
    {
        if (!$this->checkAuth()) {
            return redirect()->to(base_url('/home/dashboard'));
        }
        $id= $this->request->getPost('id');    
        $namaLengkap=$this->request->getPost('nama_pegawai');
        $email=$this->request->getPost('email');
        $alamat=$this->request->getPost('alamat');
        $username=$this->request->getPost('username');
        $role=$this->request->getPost('role');
        $maker_pegawai=session()->get('id');

        $where=array('id_user'=>$id);    
       
            $user=array(
            'role'=>$role,
            'alamat'=>$alamat,
            'email'=>$email,
            'namaLengkap'=> $namaLengkap
            );
        

        $model=new M_model();
        $model->edit('users', $user,$where);

       
        
        $log = array(
            'isi_log' => 'user mengubah data petugas',
            'log_idUser' => $maker_pegawai,
            
        );

        $model->simpan('log', $log);
        return redirect()->to('/petugas');

    }

    public function hapus($id)
    {
    if (!$this->checkAuth()) {
        return redirect()->to(base_url('/home/dashboard'));
    }

        $model=new M_model();
        $where2=array('id_user'=>$id);

        $model->hapus('users',$where2);

        $log = array(
            'isi_log' => 'user menghapus data petugas',
            'log_idUser' => session()->get('id'),
            
        );

        $model->simpan('log', $log);

        return redirect()->to('/petugas');

        
    }

    public function reset_password($id)
    {
    if (!$this->checkAuth()) {
        return redirect()->to(base_url('/home/dashboard'));
    }

        $model=new M_model();
        $where=array('id_user'=>$id);
        $data=array(
            'password'=>md5('halo#12345')
        );
        $model->edit('users',$data,$where);

        $log = array(
            'isi_log' => 'user melakukan reset password pada petugas',
            'log_idUser' => session()->get('id'), 
            
        );

        $model->simpan('log', $log);

        return redirect()->to('/petugas');

        
    }

}