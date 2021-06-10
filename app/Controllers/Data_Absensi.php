<?php

namespace App\Controllers;

use App\Models\ModelAbsensi;
use App\Models\ModelSantri;
use App\Models\ModelTA;

class Data_Absensi extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAbsensi = new ModelAbsensi();
        $this->ModelTA = new ModelTA();
        $this->ModelSantri = new ModelSantri();
    }
    public function index()
    {
        $data = [
            'title' => 'Absensi',
            'absensi' => $this->ModelAbsensi->allData(),
            'santri' => $this->ModelAbsensi->tampilkan_chart(),
            'isi'    => 'admin/absensi'
        ];

        return view("layout/wrapper", $data);
    }

    public function add_absensi()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'nama_santri' => $this->request->getPost('nama_santri'),
        ];
        $this->ModelAbsensi->addData($data);
        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_absensi'));
    }

    public function delete($NIS)
    {
        $data = [
            'NIS' => $NIS,
        ];
        $this->ModelAbsensi->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_absensi'));
    }

    public function viewchart($NIS)
    {
        $data = [
            'title' => 'View Chart',
            'absensi' => $this->ModelAbsensi->detail_data($NIS),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
            'santri' => $this->ModelSantri->allData(),
            'isi'    => 'admin/v_viewchart'
        ];

        return view("layout/wrapper", $data);
    }

    public function draft_kehadiran()
    {
        $data = [
            'title' => 'Draft Kehadiran',
            'draft' => $this->ModelAbsensi->tampilkan_draft(),
            'isi' => 'admin/absen_santri/daftar_kehadiran'
        ];
        return view("layout/wrapper", $data);
    }

    public function add_draft()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'nama_Santri' => $this->request->getPost('nama_santri'),
            'keterangan' => $this->request->getPost('keterangan'),
            'sesi_pengajian' => $this->request->getPost('sesi_pengajian'),
            'kelas' => $this->request->getPost('kelas'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];
        $this->ModelAbsensi->tambah_kehadiran($data);
        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_absensi/draft_kehadiran'));
    }

    public function edit_draft($id_kehadiran)
    {
        $data = [
            'id_kehadiran' => $id_kehadiran,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_Santri' => $this->request->getPost('nama_santri'),
            'keterangan' => $this->request->getPost('keterangan'),
            'sesi_pengajian' => $this->request->getPost('sesi_pengajian'),
            'kelas' => $this->request->getPost('kelas'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];
        $this->ModelAbsensi->edit_kehadiran($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('data_absensi/draft_kehadiran'));
    }

    public function delete_draft($id_kehadiran)
    {
        $data = [
            'id_kehadiran' => $id_kehadiran,
        ];
        $this->ModelAbsensi->delete_kehadiran($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_absensi/draft_kehadiran'));
    }
}
