<?php

namespace App\Controllers;

use App\Models\ModelTA;
use App\Models\ModelPengumuman;
use App\Models\ModelSantri;
use App\Models\ModelPembayaran;
use App\Models\ModelPesan;
use App\Models\ModelSurat;

class Santri extends BaseController
{
    protected $ModelPesan;

    public function __construct()
    {
        helper('form');
        $this->ModelTA = new ModelTA();
        $this->ModelPengumuman = new ModelPengumuman();
        $this->ModelSantri = new ModelSantri();
        $this->ModelPembayaran = new ModelPembayaran();
        $this->ModelPesan = new ModelPesan();
        $this->ModelSurat = new ModelSurat();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $this->ModelPengumuman->allData(),
            'isi'    => 'santri',
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

    public function nilai_santri()
    {
        $data = [
            'title' => 'Transkrip Nilai',
            'isi'    => 'santri/v_nilaiSantri'
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

    public function request_surat()
    {
        $data = [
            'title' => 'Surat',
            'surat' => $this->ModelSurat->permintaan_surat(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
            'santri' => $this->ModelSantri->allData(),
            'isi'    => 'santri/surat_santri/v_request',
        ];
        return view("layout/wrapper", $data);
    }

    public function pengajuan_surat()
    {
        $data = [
            'title' => 'Surat',
            'surat' => $this->ModelSurat->permintaan_surat(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
            'santri' => $this->ModelSantri->allData(),
            'isi'    => 'santri/v_pengajuanSurat',
        ];
        return view("layout/wrapper", $data);
    }
}
