<?php

namespace App\Controllers;

use App\Models\ModelSurat;

class Data_Surat extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelSurat = new ModelSurat();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengajuan Surat Santri',
            'pengajuan' => $this->ModelSurat->allDataPengajuan(),
            'isi'    => 'admin/pengajuansurat'
        ];

        return view("layout/wrapper", $data);
    }

    public function edit_pengajuansurat($id_pengajuansurat)
    {
        $data = [
            'id_pengajuansurat' => $id_pengajuansurat,
            'NIS' => $this->request->getPost('NIS'),
            'Nama_santri' => $this->request->getPost('nama_santri'),
            'tahun_ajaran' => $this->request->getPost('tahun_ajaran'),
            'jenis_surat' => $this->request->getPost('jenis_surat'),
            'status' => $this->request->getPost('status'),
        ];
        $this->ModelSurat->editpengajuan($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('data_surat'));
    }

}