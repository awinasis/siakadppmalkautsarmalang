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

    public function tambahNilaiMateri()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nilai1' => $this->request->getPost('nilai1'),
            'nilai2' => $this->request->getPost('nilai2'),
            'nilai3' => $this->request->getPost('nilai3'),
            'nilai4' => $this->request->getPost('nilai4'),
            'nilai5' => $this->request->getPost('nilai5'),
            'nilai6' => $this->request->getPost('nilai6'),
            'nilai7' => $this->request->getPost('nilai7'),
            'nilai8' => $this->request->getPost('nilai8'),
            'nilai9' => $this->request->getPost('nilai9'),
            'nilai10' => $this->request->getPost('nilai10'),
            'nilai11' => $this->request->getPost('nilai11'),
            'nilai12' => $this->request->getPost('nilai12'),
            'nilai13' => $this->request->getPost('nilai13'),
            'nilai14' => $this->request->getPost('nilai14'),
            'nilai15' => $this->request->getPost('nilai15'),
            'nilai16' => $this->request->getPost('nilai16'),
            'nilai17' => $this->request->getPost('nilai17'),
            'nilai18' => $this->request->getPost('nilai18'),
            'nilai19' => $this->request->getPost('nilai19'),
            'nilai20' => $this->request->getPost('nilai20'),
            'nilai21' => $this->request->getPost('nilai21'),
            'nilai22' => $this->request->getPost('nilai22'),
            'nilai23' => $this->request->getPost('nilai23'),
            'nilai24' => $this->request->getPost('nilai24'),
            'nilai25' => $this->request->getPost('nilai25'),
            'nilai26' => $this->request->getPost('nilai26'),
            'nilai27' => $this->request->getPost('nilai27'),
            'nilai28' => $this->request->getPost('nilai28'),
            'nilai29' => $this->request->getPost('nilai29'),
            'nilai30' => $this->request->getPost('nilai30'),
            'nilai31' => $this->request->getPost('nilai31'),
        ];
        $this->ModelNilai->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_nilai'));
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
