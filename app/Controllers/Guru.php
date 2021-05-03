<?php

namespace App\Controllers;

use App\Models\ModelAbsensi;
use App\Models\ModelSantri;
use App\Models\ModelKelas;
use App\Models\ModelMateri;

class Guru extends BaseController
{

    protected $ModelSantri;
    protected $ModelKelas;
    protected $ModelAbsensi;
    protected $ModelMateri;

    public function __construct()
    {
        $this->ModelAbsensi = new ModelAbsensi();
        $this->ModelSantri = new ModelSantri();
        $this->ModelKelas = new ModelKelas();
        $this->ModelMateri = new ModelMateri();
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
            "total_santri" => $this->ModelSantri->get_santri_count(),
            "total_kelas" => $this->ModelKelas->get_kelas_count(),
            "total_absensi" => $this->ModelAbsensi->get_absensi_count(),
            "total_materi" => $this->ModelMateri->get_materi_count(),
            // 'reportAbsen' => $reportAbsen,
            // 'reportSantri' => $reportSantri
        ];

        return view("layout/wrapper", $data);
    }
}
