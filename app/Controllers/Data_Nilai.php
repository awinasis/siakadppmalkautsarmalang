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

    public function addNilaiMateri()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'Nilai1' => $this->request->getPost('nilai1'),
            'Nilai2' => $this->request->getPost('nilai2'),
            'Nilai3' => $this->request->getPost('nilai3'),
            'Nilai4' => $this->request->getPost('nilai4'),
            'Nilai5' => $this->request->getPost('nilai5'),
            'Nilai6' => $this->request->getPost('nilai6'),
            'Nilai7' => $this->request->getPost('nilai7'),
            'Nilai8' => $this->request->getPost('nilai8'),
            'Nilai9' => $this->request->getPost('nilai9'),
            'Nilai10' => $this->request->getPost('nilai10'),
            'Nilai11' => $this->request->getPost('nilai11'),
            'Nilai12' => $this->request->getPost('nilai12'),
            'Nilai13' => $this->request->getPost('nilai13'),
            'Nilai14' => $this->request->getPost('nilai14'),
            'Nilai15' => $this->request->getPost('nilai15'),
            'Nilai16' => $this->request->getPost('nilai16'),
            'Nilai17' => $this->request->getPost('nilai17'),
            'Nilai18' => $this->request->getPost('nilai18'),
            'Nilai19' => $this->request->getPost('nilai19'),
            'Nilai20' => $this->request->getPost('nilai20'),
            'Nilai21' => $this->request->getPost('nilai21'),
            'Nilai22' => $this->request->getPost('nilai22'),
            'Nilai23' => $this->request->getPost('nilai23'),
            'Nilai24' => $this->request->getPost('nilai24'),
            'Nilai25' => $this->request->getPost('nilai25'),
            'Nilai26' => $this->request->getPost('nilai26'),
            'Nilai27' => $this->request->getPost('nilai27'),
            'Nilai28' => $this->request->getPost('nilai28'),
            'Nilai29' => $this->request->getPost('nilai29'),
            'Nilai30' => $this->request->getPost('nilai30'),
            'Nilai31' => $this->request->getPost('nilai31'),
        ];
        $this->ModelNilai->addData($data);

        session()->setFlashdata('pesan', 'Nilai berhasil di tambahkan !!');
        return redirect()->to(base_url('data_nilai/index'));
    }

    public function editNilaiMateri($id_nm)
    {
        $data = [
            'id_nm' => $id_nm,
            'Nilai1' => $this->request->getPost('nilai1'),
            'Nilai2' => $this->request->getPost('nilai2'),
            'Nilai3' => $this->request->getPost('nilai3'),
            'Nilai4' => $this->request->getPost('nilai4'),
            'Nilai5' => $this->request->getPost('nilai5'),
            'Nilai6' => $this->request->getPost('nilai6'),
            'Nilai7' => $this->request->getPost('nilai7'),
            'Nilai8' => $this->request->getPost('nilai8'),
            'Nilai9' => $this->request->getPost('nilai9'),
            'Nilai10' => $this->request->getPost('nilai10'),
            'Nilai11' => $this->request->getPost('nilai11'),
            'Nilai12' => $this->request->getPost('nilai12'),
            'Nilai13' => $this->request->getPost('nilai13'),
            'Nilai14' => $this->request->getPost('nilai14'),
            'Nilai15' => $this->request->getPost('nilai15'),
            'Nilai16' => $this->request->getPost('nilai16'),
            'Nilai17' => $this->request->getPost('nilai17'),
            'Nilai18' => $this->request->getPost('nilai18'),
            'Nilai19' => $this->request->getPost('nilai19'),
            'Nilai20' => $this->request->getPost('nilai20'),
            'Nilai21' => $this->request->getPost('nilai21'),
            'Nilai22' => $this->request->getPost('nilai22'),
            'Nilai23' => $this->request->getPost('nilai23'),
            'Nilai24' => $this->request->getPost('nilai24'),
            'Nilai25' => $this->request->getPost('nilai25'),
            'Nilai26' => $this->request->getPost('nilai26'),
            'Nilai27' => $this->request->getPost('nilai27'),
            'Nilai28' => $this->request->getPost('nilai28'),
            'Nilai29' => $this->request->getPost('nilai29'),
            'Nilai30' => $this->request->getPost('nilai30'),
            'Nilai31' => $this->request->getPost('nilai31'),
        ];
        $this->ModelNilai->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('data_nilai/index'));
    }

    //------------------------------------------------ 2 --------------------------------------------------// 

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

    //------------------------------------------------ 3 --------------------------------------------------// 

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

    //------------------------------------------------ 4 --------------------------------------------------// 

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

    //------------------------------------------------ 5 --------------------------------------------------// 

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

    //------------------------------------------------ 6 --------------------------------------------------// 

    public function keaktifanKegiatan()
    {
        $data = [
            'title' => 'Nilai',
            'nilai' => $this->ModelNilai->allData5(),
            'isi'    => 'guru/view_nilaiKeaktifan',
        ];

        return view("layout/wrapper", $data);
    }

    //------------------------------------------------ 7 --------------------------------------------------// 

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

    //------------------------------------------------ 8 --------------------------------------------------// 

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

    //------------------------------------------------ 9 --------------------------------------------------// 

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
