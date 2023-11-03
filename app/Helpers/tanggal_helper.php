<?php
if (!function_exists('tanggal')) {
    function tanggal($tgl)
    {
        // format tanggal Y-m-d
        $bulan = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',


        );
        $tgl = date('Y-m-d', strtotime($tgl));
        $pecah = explode('-', $tgl);
        $newTgl = $pecah[2]. ' '. $bulan[$pecah[1]].' '. $pecah[0];
        return $newTgl;
    }
}
