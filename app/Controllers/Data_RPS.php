<?php

namespace App\Controllers;

use App\Models\ModelRPS;

class Data_RPS extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelRPS = new ModelRPS();
    }
    public function index()
    {
        $data = [
            'title' => 'rps',
            'rps' => $this->ModelRPS->allData(),
            'isi'    => 'admin/rps'
        ];

        return view("layout/wrapper", $data);
    }
}
