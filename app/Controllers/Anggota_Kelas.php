<?php

namespace App\Controllers;

use App\Models\Model_AnggotaKelas;
use App\Models\ModelSantri;
use App\Models\ModelKelas;
use App\Models\ModelTA;

class Anggota_Kelas extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_AnggotaKelas = new Model_AnggotaKelas();
        $this->ModelSantri = new ModelSantri();
        $this->ModelKelas = new ModelKelas();
        $this->ModelTA = new ModelTA();
    }

    public function index()
    {
        $data = [
            'title' => 'Anggota Kelas',
            'anggotakelas' => $this->Model_AnggotaKelas->allData(),
            'santri' => $this->ModelSantri->allData(),
            'Kelas' => $this->ModelKelas->allData(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
            'isi'    => 'guru/view_anggotaKelas'
        ];

        return view("layout/wrapper", $data);
    }
}
