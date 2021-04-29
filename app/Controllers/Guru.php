<?php

namespace App\Controllers;

use App\Models\ModelAbsensi;

class Guru extends BaseController
{
    public function __construct()
    {
        $this->ModelAbsensi = new ModelAbsensi();
    }

    public function index()
    {
        // if (session()->get('level') == "Guru") {
        //     $reportAbsen = $this->ModelAbsensi->orderBy('NIS', 'desc')->findAll();
        // } else {
        //     $reportAbsen = $this->ModelAbsensi->where('NIS', session()->get('id_santri'))->orderBy('id_santri', 'desc')->findAll();
        // }
        // $reportAbsen = $this->ModelAbsensi->findAll();

        // if (session()->get('level') == "Guru") {
        //     $reportSantri = $this->ModelSantri->orderBy('NIS', 'desc')->findAll();
        // } else {
        //     $reportSantri = $this->ModelSantri->where('NIS', session()->get('id_santri'))->orderBy('id_santri', 'desc')->findAll();
        // }
        // $reportSantri = $this->ModelSantri->findAll();

        $data = [
            'title' => 'Guru',
            'isi'    => 'guru',
            // 'reportAbsen' => $reportAbsen,
            // 'reportSantri' => $reportSantri
        ];

        return view("layout/wrapper", $data);
    }
}
