<?php

namespace App\Controllers;

use App\Models\M_model;

class Petugas extends BaseController
{
    protected function checkAuth()
    {
        $id_user = session()->get('id_user');
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
        $on="users.id_user=karyawan.user_id";
        $data['data']= $model->fusion('users','karyawan',$on);
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
        $model=new M_model();
       
        $namaLengkap=$this->request->getPost('nama_karyawan');
        $email=$this->request->getPost('email');
        $NIK=$this->request->getPost('NIK');
        $jk=$this->request->getPost('jk');
        $username=$this->request->getPost('username');
        $role=$this->request->getPost('role');
        $maker_karyawan=session()->get('id_user');

        $user=array(
            'username'=>$username,
            'password'=>md5('halo#12345'),
            'email'=>$email,
            'role'=>$role,
        );
        $user_id = $model->simpanID('users', $user);
        $karyawan=array(
            'NIK'=>$NIK,
            'nama'=> $namaLengkap,
            'user_id'=>$user_id,
            'JK'=>$jk,
        );

        $model->simpan('karyawan', $karyawan);

        
       
        
        $log = array(
            'isi_log' => 'user menambahkan data petugas',
            'log_idUser' => $maker_karyawan,
            
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
        $model=new M_model();
        if (!$this->checkAuth()) {
            return redirect()->to(base_url('/home/dashboard'));
        }
        $id= $this->request->getPost('id');    
        $namaLengkap=$this->request->getPost('nama_karyawan');
        $email=$this->request->getPost('email');
        $NIK=$this->request->getPost('NIK');
        $jk=$this->request->getPost('jk');
        $username=$this->request->getPost('username');
        $role=$this->request->getPost('role');
        $maker_karyawan=session()->get('id_user');

        $where=array('id_user'=>$id);   
        $where2=array('user_id'=>$id);    
       
        $user=array(
            'username'=>$username,
            'password'=>md5('halo#12345'),
            'email'=>$email,
            'role'=>$role,
        );
$karyawan=array(
            'NIK'=>$NIK,
            'nama'=> $namaLengkap,
            // 'user_id'=>$id,
            'JK'=>$jk,
        );
        

       
        $model->edit('users', $user,$where);
        $model->edit('karyawan', $karyawan,$where2);

       
        
        $log = array(
            'isi_log' => 'user mengubah data petugas',
            'log_idUser' => $maker_karyawan,
            
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
            'log_idUser' => session()->get('id_user'),
            
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
            'log_idUser' => session()->get('id_user'), 
            
        );

        $model->simpan('log', $log);

        return redirect()->to('/petugas');

        
    }

}