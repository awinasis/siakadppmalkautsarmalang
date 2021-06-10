<?php

namespace App\Controllers;

use App\Models\ModelRapor;
use App\Models\ModelSantri;
use App\Models\ModelKelas;
use App\Models\ModelMateri;
use App\Models\ModelGuru;

class Guru extends BaseController
{

    protected $ModelSantri;
    protected $ModelKelas;
    protected $ModelRapor;
    protected $ModelMateri;
    protected $ModelGuru;

    public function __construct()
    {
        $this->ModelRapor = new ModelRapor();
        $this->ModelSantri = new ModelSantri();
        $this->ModelKelas = new ModelKelas();
        $this->ModelMateri = new ModelMateri();
        $this->ModelGuru = new ModelGuru();
    }

    public function index()
    {
        $data = [
            'title' => 'Guru',
            'isi'    => 'guru',
            "total_santri" => $this->ModelSantri->get_santri_count(),
            "total_kelas" => $this->ModelKelas->get_kelas_count(),
            "total_rapor" => $this->ModelRapor->get_rapor_count(),
            "total_materi" => $this->ModelMateri->get_materi_count(),
        ];

        return view("layout/wrapper", $data);
    }

    public function biodata_guru()
    {
        $id_guru = session()->get('username');
        $data = [
            'title' => 'Guru',
            'isi'    => 'guru/view_bioGuru',
            'guru' => $this->ModelGuru->get_bioGuru_by_id($id_guru),
            'id_guru' => $id_guru
        ];

        return view("layout/wrapper", $data);
    }
}
