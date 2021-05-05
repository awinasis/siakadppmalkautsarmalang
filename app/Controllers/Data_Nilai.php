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
            'title' => 'Nilai Materi Pokok',
            'nilai' => $this->ModelNilai->allData(),
            'isi'    => 'guru/view_nilaiMateri',
        ];

        return view("layout/wrapper", $data);
    }

    public function tambahNilaiMateri()
    {
        $data = [
            'title' => 'Tambah Nilai Materi',
            'nilai' => $this->ModelNilai->allData(),
            'isi'    => 'guru/materi/tambah_nilaiMateri',
        ];

        return view("layout/wrapper", $data);
    }

    public function konsepPraktikum()
    {
        $data = [
            'title' => 'Nilai Pemahaman Konsep & Praktikum',
            'nilai' => $this->ModelNilai->allData1(),
            'isi'    => 'guru/view_nilaiKonsepPraktikum',
        ];

        return view("layout/wrapper", $data);
    }

    public function tambahNilaiKonsepPraktikum()
    {
        $data = [
            'title' => 'Tambah Nilai Konsep & Praktikum',
            'nilai' => $this->ModelNilai->allData1(),
            'isi'    => 'guru/konsep_praktikum/tambah_nilaiKonsepPraktikum',
        ];

        return view("layout/wrapper", $data);
    }

    public function sikapPerilaku()
    {
        $data = [
            'title' => 'Nilai Sikap & Perilaku',
            'nilai' => $this->ModelNilai->allData2(),
            'isi'    => 'guru/view_nilaiSikapPerilaku',
        ];

        return view("layout/wrapper", $data);
    }

    public function tambahNilaiSikapPerilaku()
    {
        $data = [
            'title' => 'Tambah Nilai Sikap & Perilaku',
            'nilai' => $this->ModelNilai->allData2(),
            'isi'    => 'guru/sikap_perilaku/tambah_nilaiSikapPerilaku',
        ];

        return view("layout/wrapper", $data);
    }

    public function limaSuksesSantri()
    {
        $data = [
            'title' => 'Nilai 5 Sukses Santri',
            'nilai' => $this->ModelNilai->allData3(),
            'isi'    => 'guru/view_nilaiLimaSuksesSantri',
        ];

        return view("layout/wrapper", $data);
    }

    public function tambahNilaiLimaSuksesSantri()
    {
        $data = [
            'title' => 'Tambah Nilai 5 Sukses Santri',
            'nilai' => $this->ModelNilai->allData3(),
            'isi'    => 'guru/5_sukses_santri/tambah_nilaiLimaSuksesSantri',
        ];

        return view("layout/wrapper", $data);
    }

    public function ekstrakurikuler()
    {
        $data = [
            'title' => 'Nilai Ekstrakurikuler',
            'nilai' => $this->ModelNilai->allData4(),
            'isi'    => 'guru/view_nilaiEkstrakurikuler',
        ];

        return view("layout/wrapper", $data);
    }

    public function tambahNilaiEkstrakurikuler()
    {
        $data = [
            'title' => 'Tambah Nilai Ekstrakurikuler',
            'nilai' => $this->ModelNilai->allData4(),
            'isi'    => 'guru/ekstrakurikuler/tambah_nilaiEkstrakurikuler',
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
            'isi'    => 'guru/view_nilaiPrestasi',
        ];

        return view("layout/wrapper", $data);
    }

    public function tambahNilaiIP()
    {
        $data = [
            'title' => 'Tambah Nilai IP',
            'nilai' => $this->ModelNilai->allData6(),
            'isi'    => 'guru/prestasi/tambah_nilaiIP',
        ];

        return view("layout/wrapper", $data);
    }

    public function catatanSaranPengurus()
    {
        $data = [
            'title' => 'Catatan & Saran Pengurus',
            'nilai' => $this->ModelNilai->allData7(),
            'isi'    => 'guru/view_nilaiCatatanSaranPengurus',
        ];

        return view("layout/wrapper", $data);
    }

    public function tambahCatatanSaran()
    {
        $data = [
            'title' => 'Tambah Catatan & Saran Pengurus',
            'nilai' => $this->ModelNilai->allData7(),
            'isi'    => 'guru/catatan_saran/tambah_CatatanSaran',
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
