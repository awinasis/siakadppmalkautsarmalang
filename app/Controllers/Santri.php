<?php

namespace App\Controllers;

use App\Models\ModelAbsensi;
use App\Models\ModelPengumuman;
use App\Models\ModelSantri;

class Santri extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAbsensi = new ModelAbsensi();
        $this->ModelPengumuman = new ModelPengumuman();
        $this->ModelSantri = new ModelSantri();
    }

    public function index()
    {
        // $pengumuman = $this->ModelPengumuman->where('visible_news', "1")->orderBy('tgl_dibuat', 'desc')->findAll();
        $data = [
            'title' => 'Santri',
            'isi'    => 'santri',
            // 'pengumuman' => $pengumuman
        ];

        return view("layout/wrapper", $data);
    }

    public function biodata_santri()
    {
        $data = [
            'title' => 'santri',
            'isi'    => 'santri/v_bioSantri'
        ];

        return view("layout/wrapper", $data);
    }

    public function RPS()
    {
        $data = [
            'title' => 'rps',
            'isi'    => 'santri/v_rps'
        ];

        return view("layout/wrapper", $data);
    }

    public function pembayaran_ppm()
    {
        $data = [
            'title' => 'pembayaran',
            'isi'    => 'santri/v_pembayaran'
        ];

        return view("layout/wrapper", $data);
    }

    public function jadwal_agenda()
    {
        $data = [
            'title' => 'Jadwal Agenda',
            'isi'    => 'santri/v_agenda'
        ];

        return view("layout/wrapper", $data);
    }

    public function absen_kbm()
    {
        // if (session()->get('level') == "Admin") {
        //     $reportAbsen = $this->ModelAbsensi->orderBy('NIS', 'desc')->findAll();
        // } else {
        //     $reportAbsen = $this->ModelAbsensi->where('NIS', session()->get('id_santri'))->orderBy('id_santri', 'desc')->findAll();
        // }
        // $reportAbsen = $this->ModelAbsensi->findAll();

        $data = [
            'title' => 'Absensi KBM',
            'absensi' => $this->ModelAbsensi->allData(),
            'isi'    => 'santri/v_absenSantri',
            // 'reportAbsen' => $reportAbsen
        ];

        return view("layout/wrapper", $data);
    }
}
