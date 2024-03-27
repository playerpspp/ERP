<?php

namespace App\Controllers;

use App\Models\M_model;

class BukuController extends BaseController
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
 
    public function dashboard()
    {
        if (!$this->checkAuth()) {
            return redirect()->to(base_url('/Home/logout'));
        }

        

        echo view ('viewbuku/pages/dashboard');

        
    }

}
