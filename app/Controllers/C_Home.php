<?php

namespace App\Controllers;


class C_Home extends BaseController{
    public function index(){
        $session = session();
        if($session->get('role') == null){
            return redirect()->to(base_url("public/C_Login") );
        }
        return view('Home/Home');
    }
}