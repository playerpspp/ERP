<?php

namespace App\Controllers;

use App\Models\M_model;

class Log extends BaseController
{
    protected function checkAuth()
    {
        $id_user = session()->get('id_user');
        $role = session()->get('role');
        if ($id_user != null) {
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
        $model= new M_model();
        $on='log.log_idUser=karyawan.user_id';
        $on2='log.log_idUser=students.user_id';
        $on3='log.log_idUser=teachers.user_id';
        $on4='log.log_idUser=users.id_user';
        if(session()->get('role')== "admin"){
           
            $data['data']= $model->nika('log','karyawan','students','teachers','users',$on,$on2,$on3,$on4);
            }else{
                $data['data']=$model->nika_w('log','karyawan','students','teachers','users',$on,$on2,$on3,$on4, ['log.log_idUser' => session()->get('id_user')]);
            }
       

        echo view('viewbuku/pages/log',$data);
    }

}