<?php

namespace App\Controllers;

use App\Models\ModelNilai;

class Data_Nilai extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelNilai = new ModelNilai();
    }
    public function index()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData(),
            'isi'    => 'guru/view_nilaiMateri',
        ];

        return view("layout/wrapper", $data);
    }

    public function konsepPraktikum()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData1(),
            'isi'    => 'guru/view_nilaiKonsepPraktikum',
        ];

        return view("layout/wrapper", $data);
    }
}
