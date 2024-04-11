<?php

namespace App\Controllers;

use App\Models\M_model;

class Log extends BaseController
{
    protected function checkAuth()
    {
        $id_user = session()->get('id');
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
        $on='log.log_idUser=users.id_user';
        if(session()->get('role')== "admin"){
           
            $data['data']= $model->fusionDESC('log','users',$on);
            }else{
                $data['data']=$model->fusion_wDESC('log','users',$on, ['log.log_idUser' => session()->get('id')]);
            }
       

        echo view('viewbuku/pages/log',$data);
    }

}