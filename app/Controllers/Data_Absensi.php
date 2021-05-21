<?php

namespace App\Controllers;

use App\Models\ModelAbsensi;

class Data_Absensi extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAbsensi = new ModelAbsensi();
    }
    public function index()
    {
        $data = [
            'title' => 'Absensi',
            'absensi' => $this->ModelAbsensi->allData(),
            'isi'    => 'admin/absensi'
        ];

        return view("layout/wrapper", $data);
    }

    public function add_absensi()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Nama_Santri' => $this->request->getPost('nama_santri'),
            'keterangan' => $this->request->getPost('keterangan'),
            'sesi_pengajian' => $this->request->getPost('sesi_pengajian'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];
        $this->ModelAbsensi->addData($data);
        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_absensi'));
    }

    public function edit_absensi($NIS)
    {
        $data = [
            'NIS' => $NIS,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_Santri' => $this->request->getPost('nama_santri'),
            'keterangan' => $this->request->getPost('keterangan'),
            'sesi_pengajian' => $this->request->getPost('sesi_pengajian'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];
        $this->ModelAbsensi->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
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
            'isi'    => 'admin/v_viewchart'
        ];

        return view("layout/wrapper", $data);
    }
}
