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

    public function sikapPerilaku()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData2(),
            'isi'    => 'guru/view_nilaiSikapPerilaku',
        ];

        return view("layout/wrapper", $data);
    }

    public function limaSuksesSantri()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData3(),
            'isi'    => 'guru/view_nilaiLimaSuksesSantri',
        ];

        return view("layout/wrapper", $data);
    }

    public function ekstrakurikuler()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData4(),
            'isi'    => 'guru/view_nilaiEkstrakurikuler',
        ];

        return view("layout/wrapper", $data);
    }

    public function keaktifanKegiatan()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData5(),
            'isi'    => 'guru/view_nilaiKeaktifan',
        ];

        return view("layout/wrapper", $data);
    }

    public function prestasiKuliah()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData6(),
            'isi'    => 'guru/view_nilaiPrestasiKuliah',
        ];

        return view("layout/wrapper", $data);
    }

    public function catatanSaranPengurus()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData7(),
            'isi'    => 'guru/view_nilaiCatatanSaranPengurus',
        ];

        return view("layout/wrapper", $data);
    }

    public function Keputusan()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData8(),
            'isi'    => 'guru/view_nilaiKeputusan',
        ];

        return view("layout/wrapper", $data);
    }
}
