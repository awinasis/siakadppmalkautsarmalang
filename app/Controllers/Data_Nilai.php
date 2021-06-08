<?php

namespace App\Controllers;

use App\Models\ModelNilai;
use App\Models\ModelTA;
use App\Models\ModelSantri;

class Data_Nilai extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelNilai = new ModelNilai();
        $this->ModelTA = new ModelTA();
        $this->ModelSantri = new ModelSantri();
    }

    //------------------------------------------------ 1 --------------------------------------------------// 

    public function index()
    {
        $data = [
            'title' => 'Nilai Materi',
            'nilai' => $this->ModelNilai->allData(),
            'santri' => $this->ModelSantri->allData(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
            'isi'    => 'guru/view_nilaiMateri.php',
        ];

        return view("layout/wrapper", $data);
    }

    public function tampil_nilaiMateriHB()
    {
        $data = [
            'title' => 'Nilai Materi',
            'nilai' => $this->ModelNilai->allData_HB(),
            'santri' => $this->ModelSantri->allData(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
            'isi'    => 'guru/view_nilaiMateri2.php',
        ];

        echo view("layout/wrapper", $data);
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
            'Nama_santri' => $this->request->getPost('nama_santri'),
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

    public function ubahNilaiMateri($id_nm)
    {
        $data = [
            'title' => 'Ubah Nilai Materi',
            'nilai' => $this->ModelNilai->detail_data($id_nm),
            'isi'    => 'guru/materi/edit_nilaiMateri',
        ];

        return view("layout/wrapper", $data);
    }

    public function editNilaiMateri($id_nm)
    {
        $data = [
            'id_nm' => $id_nm,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
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
        $this->ModelNilai->editData($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di update !!');
        return redirect()->to(base_url('data_nilai/index'));
    }

    public function delete($id_nm)
    {
        $data = [
            'id_nm' => $id_nm,
        ];
        $this->ModelNilai->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_nilai/index'));
    }

    //------------------------------------------------ 2 --------------------------------------------------// 

    public function konsepPraktikum()
    {
        $data = [
            'title' => 'Nilai Pemahaman Konsep & Praktikum',
            'nilai' => $this->ModelNilai->allData1(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
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

    public function addNilaiKonsepPraktikum()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'N1' => $this->request->getPost('n1'),
            'N2' => $this->request->getPost('n2'),
            'N3' => $this->request->getPost('n3'),
            'N4' => $this->request->getPost('n4'),
            'N5' => $this->request->getPost('n5'),
            'N6' => $this->request->getPost('n6'),
            'N7' => $this->request->getPost('n7'),
            'N8' => $this->request->getPost('n8'),
            'N9' => $this->request->getPost('n9'),
            'N10' => $this->request->getPost('n10'),
            'N11' => $this->request->getPost('n11'),
            'N12' => $this->request->getPost('n12'),
            'N13' => $this->request->getPost('n13'),
            'N14' => $this->request->getPost('n14'),
            'N15' => $this->request->getPost('n15'),
            'N16' => $this->request->getPost('n16'),
            'N17' => $this->request->getPost('n17'),
            'N18' => $this->request->getPost('n18'),
            'N19' => $this->request->getPost('n19'),
            'N20' => $this->request->getPost('n20'),
            'N21' => $this->request->getPost('n21'),
            'N22' => $this->request->getPost('n22'),
            'N23' => $this->request->getPost('n23'),
            'N24' => $this->request->getPost('n24'),
        ];
        $this->ModelNilai->addData1($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di tambahkan !!');
        return redirect()->to(base_url('data_nilai/konsepPraktikum'));
    }

    public function ubahNilaiKonsepPraktikum($id_kp)
    {
        $data = [
            'title' => 'Ubah Nilai Konsep & Praktikum',
            'nilai' => $this->ModelNilai->detail_data1($id_kp),
            'isi'    => 'guru/konsep_praktikum/edit_nilaiKonsepPraktikum',
        ];

        return view("layout/wrapper", $data);
    }

    public function editNilaiKonsepPraktikum($id_kp)
    {
        $data = [
            'id_kp' => $id_kp,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'N1' => $this->request->getPost('n1'),
            'N2' => $this->request->getPost('n2'),
            'N3' => $this->request->getPost('n3'),
            'N4' => $this->request->getPost('n4'),
            'N5' => $this->request->getPost('n5'),
            'N6' => $this->request->getPost('n6'),
            'N7' => $this->request->getPost('n7'),
            'N8' => $this->request->getPost('n8'),
            'N9' => $this->request->getPost('n9'),
            'N10' => $this->request->getPost('n10'),
            'N11' => $this->request->getPost('n11'),
            'N12' => $this->request->getPost('n12'),
            'N13' => $this->request->getPost('n13'),
            'N14' => $this->request->getPost('n14'),
            'N15' => $this->request->getPost('n15'),
            'N16' => $this->request->getPost('n16'),
            'N17' => $this->request->getPost('n17'),
            'N18' => $this->request->getPost('n18'),
            'N19' => $this->request->getPost('n19'),
            'N20' => $this->request->getPost('n20'),
            'N21' => $this->request->getPost('n21'),
            'N22' => $this->request->getPost('n22'),
            'N23' => $this->request->getPost('n23'),
            'N24' => $this->request->getPost('n24'),
        ];
        $this->ModelNilai->editData1($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di update !!');
        return redirect()->to(base_url('data_nilai/konsepPraktikum'));
    }

    public function delete1($id_kp)
    {
        $data = [
            'id_kp' => $id_kp,
        ];
        $this->ModelNilai->deleteData1($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_nilai/konsepPraktikum'));
    }


    //------------------------------------------------ 3 --------------------------------------------------// 

    public function sikapPerilaku()
    {
        $data = [
            'title' => 'Nilai Sikap & Perilaku',
            'nilai' => $this->ModelNilai->allData2(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
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

    public function addNilaiSikapPerilaku()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'Nl1' => $this->request->getPost('nl1'),
            'Nl2' => $this->request->getPost('nl2'),
            'Nl3' => $this->request->getPost('nl3'),
            'Nl4' => $this->request->getPost('nl4'),
            'Nl5' => $this->request->getPost('nl5'),
            'Nl6' => $this->request->getPost('nl6'),
            'Nl7' => $this->request->getPost('nl7'),
            'Nl8' => $this->request->getPost('nl8'),
            'Nl9' => $this->request->getPost('nl9'),
        ];
        $this->ModelNilai->addData2($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di tambahkan !!');
        return redirect()->to(base_url('data_nilai/sikapPerilaku'));
    }

    public function ubahNilaiSikapPerilaku($id_sp)
    {
        $data = [
            'title' => 'Ubah Nilai Sikap & Perilaku',
            'nilai' => $this->ModelNilai->detail_data2($id_sp),
            'isi'    => 'guru/sikap_perilaku/edit_nilaiSikapPerilaku',
        ];

        return view("layout/wrapper", $data);
    }

    public function editNilaiSikapPerilaku($id_sp)
    {
        $data = [
            'id_sp' => $id_sp,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'Nl1' => $this->request->getPost('nl1'),
            'Nl2' => $this->request->getPost('nl2'),
            'Nl3' => $this->request->getPost('nl3'),
            'Nl4' => $this->request->getPost('nl4'),
            'Nl5' => $this->request->getPost('nl5'),
            'Nl6' => $this->request->getPost('nl6'),
            'Nl7' => $this->request->getPost('nl7'),
            'Nl8' => $this->request->getPost('nl8'),
            'Nl9' => $this->request->getPost('nl9'),
        ];
        $this->ModelNilai->editData2($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di update !!');
        return redirect()->to(base_url('data_nilai/sikapPerilaku'));
    }

    public function delete2($id_sp)
    {
        $data = [
            'id_sp' => $id_sp,
        ];
        $this->ModelNilai->deleteData2($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_nilai/sikapPerilaku'));
    }

    //------------------------------------------------ 4 --------------------------------------------------// 

    public function limaSuksesSantri()
    {
        $data = [
            'title' => 'Nilai 5 Sukses Santri',
            'nilai' => $this->ModelNilai->allData3(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
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

    public function addNilaiLimaSuksesSantri()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nilai_A' => $this->request->getPost('nilai_A'),
            'nilai_B' => $this->request->getPost('nilai_B'),
            'nilai_C' => $this->request->getPost('nilai_C'),
            'nilai_D' => $this->request->getPost('nilai_D'),
            'nilai_E' => $this->request->getPost('nilai_E'),
        ];
        $this->ModelNilai->addData3($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di tambahkan !!');
        return redirect()->to(base_url('data_nilai/limaSuksesSantri'));
    }

    public function ubahNilaiLimaSuksesSantri($id_lss)
    {
        $data = [
            'title' => 'Ubah Nilai 5 Sukses Santri',
            'nilai' => $this->ModelNilai->detail_data3($id_lss),
            'isi'    => 'guru/5_sukses_santri/edit_nilaiLimaSuksesSantri',
        ];

        return view("layout/wrapper", $data);
    }

    public function editNilaiLimaSuksesSantri($id_lss)
    {
        $data = [
            'id_lss' => $id_lss,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nilai_A' => $this->request->getPost('nilai_A'),
            'nilai_B' => $this->request->getPost('nilai_B'),
            'nilai_C' => $this->request->getPost('nilai_C'),
            'nilai_D' => $this->request->getPost('nilai_D'),
            'nilai_E' => $this->request->getPost('nilai_E'),
        ];
        $this->ModelNilai->editData3($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di update !!');
        return redirect()->to(base_url('data_nilai/limaSuksesSantri'));
    }

    public function delete3($id_lss)
    {
        $data = [
            'id_lss' => $id_lss,
        ];
        $this->ModelNilai->deleteData3($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_nilai/limaSuksesSantri'));
    }

    //------------------------------------------------ 5 --------------------------------------------------// 

    public function ekstrakurikuler()
    {
        $data = [
            'title' => 'Nilai Ekstrakurikuler',
            'nilai' => $this->ModelNilai->allData4(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
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

    public function addNilaiEkstrakurikuler()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'Nilai_1' => $this->request->getPost('nilai_1'),
            'Nilai_2' => $this->request->getPost('nilai_2'),
            'Nilai_3' => $this->request->getPost('nilai_3'),
        ];
        $this->ModelNilai->addData4($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di tambahkan !!');
        return redirect()->to(base_url('data_nilai/ekstrakurikuler'));
    }

    public function ubahNilaiEkstrakurikuler($id_ne)
    {
        $data = [
            'title' => 'Ubah Nilai Ekstrakurikuler',
            'nilai' => $this->ModelNilai->detail_data4($id_ne),
            'isi'    => 'guru/ekstrakurikuler/edit_nilaiEkstrakurikuler',
        ];

        return view("layout/wrapper", $data);
    }

    public function editNilaiEkstrakurikuler($id_ne)
    {
        $data = [
            'id_ne' => $id_ne,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'Nilai_1' => $this->request->getPost('nilai_1'),
            'Nilai_2' => $this->request->getPost('nilai_2'),
            'Nilai_3' => $this->request->getPost('nilai_3'),
        ];
        $this->ModelNilai->editData4($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di update !!');
        return redirect()->to(base_url('data_nilai/ekstrakurikuler'));
    }

    public function delete4($id_ne)
    {
        $data = [
            'id_ne' => $id_ne,
        ];
        $this->ModelNilai->deleteData4($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_nilai/ekstrakurikuler'));
    }

    //------------------------------------------------ 7 --------------------------------------------------// 

    public function prestasiKuliah()
    {
        $data = [
            'title' => 'Nilai Indeks Prestasi',
            'nilai' => $this->ModelNilai->allData6(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
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

    public function addNilaiIP()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'Nilai_IP1' => $this->request->getPost('nilai_IP1'),
            'Nilai_IP2' => $this->request->getPost('nilai_IP2'),
            'Nilai_IP3' => $this->request->getPost('nilai_IP3'),
            'Nilai_IP4' => $this->request->getPost('nilai_IP4'),
            'Nilai_IP5' => $this->request->getPost('nilai_IP5'),
            'Nilai_IP6' => $this->request->getPost('nilai_IP6'),
            'Nilai_IP7' => $this->request->getPost('nilai_IP7'),
            'Nilai_IP8' => $this->request->getPost('nilai_IP8'),
            'Nilai_IP9' => $this->request->getPost('nilai_IP9'),
            'Nilai_IP10' => $this->request->getPost('nilai_IP10'),
        ];
        $this->ModelNilai->addData6($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di tambahkan !!');
        return redirect()->to(base_url('data_nilai/prestasiKuliah'));
    }

    public function ubahNilaiIndeksPrestasi($id_ip)
    {
        $data = [
            'title' => 'Ubah Nilai Indeks Prestasi',
            'nilai' => $this->ModelNilai->detail_data6($id_ip),
            'isi'    => 'guru/prestasi/edit_nilaiPrestasi',
        ];

        return view("layout/wrapper", $data);
    }

    public function editNilaiIndeksPrestasi($id_ip)
    {
        $data = [
            'id_ip' => $id_ip,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'Nilai_IP1' => $this->request->getPost('nilai_IP1'),
            'Nilai_IP2' => $this->request->getPost('nilai_IP2'),
            'Nilai_IP3' => $this->request->getPost('nilai_IP3'),
            'Nilai_IP4' => $this->request->getPost('nilai_IP4'),
            'Nilai_IP5' => $this->request->getPost('nilai_IP5'),
            'Nilai_IP6' => $this->request->getPost('nilai_IP6'),
            'Nilai_IP7' => $this->request->getPost('nilai_IP7'),
            'Nilai_IP8' => $this->request->getPost('nilai_IP8'),
            'Nilai_IP9' => $this->request->getPost('nilai_IP9'),
            'Nilai_IP10' => $this->request->getPost('nilai_IP10'),
        ];
        $this->ModelNilai->editData6($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di update !!');
        return redirect()->to(base_url('data_nilai/prestasiKuliah'));
    }

    public function delete6($id_ip)
    {
        $data = [
            'id_ip' => $id_ip,
        ];
        $this->ModelNilai->deleteData6($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_nilai/prestasiKuliah'));
    }

    //------------------------------------------------ 8 --------------------------------------------------// 

    public function catatanSaranPengurus()
    {
        $data = [
            'title' => 'Catatan & Saran',
            'nilai' => $this->ModelNilai->allData7(),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
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

    public function addCatatanSaran()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'Catatan_Saran' => $this->request->getPost('catatan_saran'),
        ];
        $this->ModelNilai->addData7($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di tambahkan !!');
        return redirect()->to(base_url('data_nilai/catatanSaranPengurus'));
    }

    public function ubahCatatanSaran($id_cs)
    {
        $data = [
            'title' => 'Ubah Catatan & Saran',
            'nilai' => $this->ModelNilai->detail_data7($id_cs),
            'isi'    => 'guru/catatan_saran/edit_catatanSaran',
        ];

        return view("layout/wrapper", $data);
    }

    public function editCatatanSaran($id_cs)
    {
        $data = [
            'id_cs' => $id_cs,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'Catatan_Saran' => $this->request->getPost('catatan_saran'),
        ];
        $this->ModelNilai->editData7($data);
        session()->setFlashdata('pesan', 'Nilai berhasil di update !!');
        return redirect()->to(base_url('data_nilai/catatanSaranPengurus'));
    }

    public function delete7($id_cs)
    {
        $data = [
            'id_cs' => $id_cs,
        ];
        $this->ModelNilai->deleteData7($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_nilai/catatanSaranPengurus'));
    }
}
