<?php
namespace App\Libraries;
class CustomLib{
    public function nama_saya(){
        return "Halo nama saya Abdhi";

    }
    public function nama_kamu($nama) {
        return "Hello, nama kamu adalah ". $nama;
    }
}