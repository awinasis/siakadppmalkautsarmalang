<?php

namespace App\Controllers;

use App\Models\ModelSantri;
use App\Models\ModelKelas;
use App\Models\ModelGuru;
use App\Models\ModelMateri;
use App\Models\ModelPengumuman;
use App\Models\ModelPembayaran;
use App\Models\ModelUserManagement;

class Admin extends BaseController
{
    protected $ModelSantri;
    protected $ModelKelas;
    protected $ModelGuru;
    protected $ModelMateri;
    protected $ModelPengumuman;
    protected $ModelPembayaran;
    protected $ModelUserManagement;

    public function __construct()
    {
        $this->ModelSantri = new ModelSantri();
        $this->ModelKelas = new ModelKelas();
        $this->ModelGuru = new ModelGuru();
        $this->ModelMateri = new ModelMateri();
        $this->ModelPengumuman = new ModelPengumuman();
        $this->ModelPembayaran = new ModelPembayaran();
        $this->ModelUserManagement = new ModelUserManagement();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin',
            'isi'    => 'admin',
            "total_santri" => $this->ModelSantri->get_santri_count(),
            "total_kelas" => $this->ModelKelas->get_kelas_count(),
            "total_guru" => $this->ModelGuru->get_guru_count(),
            "total_materi" => $this->ModelMateri->get_materi_count(),
            "total_pengumuman" => $this->ModelPengumuman->get_pengumuman_count(),
            "total_pembayaran" => $this->ModelPembayaran->get_pembayaran_count(),
            "total_user" => $this->ModelUserManagement->get_user_count()
        ];

        return view("layout/wrapper", $data);
    }

    public function viewChartJK_L()
    {
        $data = [
            'title' => 'View Chart JK',
            'chartjk' => $this->ModelSantri->allData(),
            'isi'    => 'v_viewchartJK_L'
        ];

        return view("layout/wrapper", $data);
    }

    public function viewChartJK_P()
    {
        $data = [
            'title' => 'View Chart JK',
            'chartjk' => $this->ModelSantri->allData(),
            'isi'    => 'v_viewchartJK_P'
        ];

        return view("layout/wrapper", $data);
    }
}
