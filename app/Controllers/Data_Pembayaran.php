<?php

namespace App\Controllers;

use App\Models\ModelPembayaran;
use App\Models\ModelSantri;

class Data_Pembayaran extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPembayaran = new ModelPembayaran();
        $this->ModelSantri = new ModelSantri();
    }
    public function index()
    {
        $data = [
            'title' => 'Pembayaran',
            'pembayaran' => $this->ModelPembayaran->allData(),
            'santri' => $this->ModelSantri->allData(),
            'isi'    => 'admin/pembayaran'
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Periode_pembayaran' => $this->request->getPost('periode_pembayaran'),
            'Tgl_pembayaran' => $this->request->getPost('tgl_pembayaran'),
            'Keterangan' => $this->request->getPost('keterangan'),
            'Tagihan' => $this->request->getPost('tagihan'),
            'Terbayar' => $this->request->getPost('terbayar'),
            'Status_pembayaran' => $this->request->getPost('status_pembayaran'),
        ];
        $this->ModelPembayaran->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_pembayaran'));
    }

    public function edit($id_pembayaran)
    {
        $data = [
            'id_pembayaran' => $id_pembayaran,
            'NIS' => $this->request->getPost('NIS'),
            'Periode_pembayaran' => $this->request->getPost('periode_pembayaran'),
            'Tgl_pembayaran' => $this->request->getPost('tgl_pembayaran'),
            'Keterangan' => $this->request->getPost('keterangan'),
            'Tagihan' => $this->request->getPost('tagihan'),
            'Terbayar' => $this->request->getPost('terbayar'),
            'Status_pembayaran' => $this->request->getPost('status_pembayaran'),
        ];
        $this->ModelPembayaran->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('data_pembayaran'));
    }

    public function delete($id_pembayaran)
    {
        $data = [
            'id_pembayaran' => $id_pembayaran,
        ];
        $this->ModelPembayaran->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_pembayaran'));
    }
}
