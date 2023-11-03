<?php
namespace App\Models;
use CodeIgniter\Model;

class BelajarModel extends Model {
    public function hasilKali ($a,$b) {
        return $a*$b;
    }
}