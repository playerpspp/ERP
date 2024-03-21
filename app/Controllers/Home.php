<?php

namespace App\Controllers;

use App\Models\M_model;
use CodeIgniter\Controller;


class Home extends BaseController
{

    protected function checkAuth()
    {
        $id_user = session()->get('id');
        $level = session()->get('role');
        if ($id_user != null) {
            return true;
        } else {
            return false;
        }
    }
    public function index()
    {
if (session()->get('id_user') == 0) {
            
        echo view('viewujian/head');
        echo view('viewujian/login');
        echo view('viewujian/footer');
        }else{
            return redirect()->to(base_url('/user'));
        }
    }

    public function actLogin()
    {
       $n=$this->request->getPost('username'); //mengambil username dan password dari halaman Login
       $p=$this->request->getPost('password');
       $model= new M_model();
       $data=array(
            'username'=>$n, //memasukan username dan password ke satu STRING($) 
            'password'=>md5($p)

        );
       $cek=$model->getarray('users', $data);
       if ($cek>0) {
        $on = 'users.id_user=teachers.user_id';
        $on2 = 'users.id_user=students.user_id';
        $teacher=$model->fusionArray('users','teachers',$on,$data);
        $student=$model->fusionArray('users','students',$on2,$data);
    }
    // print_r($student);
    if (isset($teacher)){
        session()->set('id_user', $cek['id_user']);
        session()->set('teacher_id', $teacher['teacher_id']);
        session()->set('name', $teacher['teacher_name']);
        session()->set('role', $cek['role']);
        return redirect()->to('/user');

    }elseif (isset($student)){
        session()->set('id_user', $cek['id_user']);
        session()->set('student_id', $student['student_id']);
        session()->set('name', $student['student_name']);
        session()->set('role', $cek['role']);
        // session()->set('class_id', $student['class_id']);
        return redirect()->to('/user');

        }else{
            return redirect()->to(base_url('/home'));

        }
    }
    public function Logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/home'));
    }


    public function register()
    {
         if ($this->checkAuth()) {
            return redirect()->to(base_url('/home/dashboard'));
        }
        echo view('viewbuku/pages/register');
    }

    public function aksi_registrasi()
    {
        if ($this->checkAuth()) {
            return redirect()->to(base_url('/home/dashboard'));
        }
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');
        $namaLengkap=$this->request->getPost('namaLengkap');
        $email=$this->request->getPost('email');
        $alamat=$this->request->getPost('alamat');

        $model= new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>md5($p),
            'level'=>'peminjam',
            'alamat'=>$alamat,
            'email'=>$email,
            'namaLengkap'=> $namaLengkap
        );
        $model->simpan('user', $data);
        $cek= $model->getRowArray('user', $data);
        if ($cek>0) {
            // $where=array('id_pegawai_user'=>$cek['id_user']);
            // $pegawai=$model->getRowArray('pegawai', $where);

                session()->set('id', $cek['id_user']);
                session()->set('username', $cek['username']);
                session()->set('Nama', $cek['namaLengkap']);
                session()->set('level', $cek['level']);

                $log = array(
                    'isi_log' => 'user melakukan registrasi dan login',
                    'log_idUser' => session()->get('id'),
                    
                );
        
                $model->simpan('log', $log);

                return redirect()->to('/Home/dashboardBuku');
                
            } else {         
        }
        return redirect()->to('/');
    }

    public function dashboard()
    {
        if (!$this->checkAuth()) {
            return redirect()->to(base_url('/home/logout'));
        }

        

        echo view ('dashboardBuku');

        
    }
    


}
