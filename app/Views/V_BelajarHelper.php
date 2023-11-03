<?php 
$nama = [
    'name' => 'nama',
    'placeholder' => 'Masukkan nama anda'
];
$opsi = [
    'sma' => 'Sekolah Menengah Atas',
    's1' => 'Strata I'
];

echo form_open();
echo 'Nama ';
echo form_input($nama);
echo '</br>';
echo 'Pendidikan ';
echo form_dropdown('pendidikan', $opsi, 'sma');
echo form_close();
