<?php

namespace App\Controllers;

use App\Models\ModelAbsensi;
use App\Models\ModelPengumuman;
use App\Models\ModelSantri;
use App\Models\ModelPembayaran;
use App\Models\ModelPesan;

class Santri extends BaseController
{
    protected $ModelPesan;

    public function __construct()
    {
        helper('form');
        $this->ModelAbsensi = new ModelAbsensi();
        $this->ModelPengumuman = new ModelPengumuman();
        $this->ModelSantri = new ModelSantri();
        $this->ModelPembayaran = new ModelPembayaran();
        $this->ModelPesan = new ModelPesan();
    }

    public function index()
    {
        // $pengumuman = $this->ModelPengumuman->where('visible_news', "1")->orderBy('tgl_dibuat', 'desc')->findAll();
        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $this->ModelPengumuman->allData(),
            'isi'    => 'santri',
            // 'pengumuman' => $pengumuman
        ];
        return view("layout/wrapper", $data);
    }

    public function biodata_santri()
    {
        $nis = session()->get('username');
        $data = [
            'title' => 'Santri',
            'isi'    => 'santri/v_bioSantri',
            'santri' => $this->ModelSantri->get_bioSantri_by_id($nis),
            'nis' => $nis
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
        $nis = session()->get('username');
        $data = [
            'title' => 'Pembayaran',
            'isi'    => 'santri/v_pembayaran',
            'pembayaran' => $this->ModelPembayaran->get_pembayaran_by_id($nis),
            'nis' => $nis
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

    public function pesan()
    {
        $nis = session()->get('username');
        $data = [
            'title' => 'Message',
            'isi'    => 'santri/v_pesan',
            'total_message' => $this->ModelPesan->get_pesan_count(),
            'pesan' => $this->ModelPesan->get_pesan_by_id($nis),
            'nis' => $nis
        ];

        return view("layout/wrapper", $data);
    }
}
