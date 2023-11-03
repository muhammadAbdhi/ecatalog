<?php

namespace App\Controllers;

use App\Models\M_Login;

class C_Login extends BaseController
{
    public function index($pesan = null)
    {
        $data["pesan"] = $pesan;
        return view('login/index', $data);
    }
    public function cek()
    {
        $username = $this->request->getPost('email-username');
        $pass = $this->request->getPost('password');

        if (empty($username) || empty($pass)) {
            $data["pesan"] = "Username atau password tidak boleh kosong";
            return view('login/index', $data);
        }

        $user = new M_Login();
        $dataUser = $user->find($username);
        if ($dataUser == null) {
            $data["pesan"] = "Username tidak ditemukan";
            return view('login/index', $data);
        } else {
            if (md5($pass) == $dataUser->password) {
                // mengeset session
                $session = session();
                $session_data = [
                    "username" => $dataUser->username,
                    "role" => $dataUser->role
                ];
                $session->set($session_data);

                // meredirect ke C_Home
                return redirect()->to(base_url("public/C_Home"));
            } else {
                $data["pesan"] = "Password salah";
                return view('login/index', $data);
            }
        }
    }
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('public/C_Login'));
    }
}
