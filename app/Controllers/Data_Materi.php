<?php

namespace App\Controllers;

use App\Models\ModelMateri;

class Data_Materi extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelMateri = new ModelMateri();
    }
    public function index()
    {
        $data = [
            'title' => 'materi',
            'materi' => $this->ModelMateri->allData(),
            'isi'    => 'admin/materi'
        ];

        return view("layout/wrapper", $data);
    }
}
