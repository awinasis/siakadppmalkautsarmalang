<?php

namespace App\Controllers;

use App\Models\ModelPembayaran;

class Data_Pembayaran extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPembayaran = new ModelPembayaran();
    }
    public function index()
    {
        $data = [
            'title' => 'Pembayaran',
            'pembayaran' => $this->ModelPembayaran->allData(),
            'isi'    => 'admin/pembayaran'
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Nama_Santri' => $this->request->getPost('nama_santri'),
            'Periode_pembayaran' => $this->request->getPost('periode_pembayaran'),
            'Keterangan' => $this->request->getPost('keterangan'),
            'Tagihan' => $this->request->getPost('tagihan'),
            'Terbayar' => $this->request->getPost('terbayar'),
            'Status' => $this->request->getPost('status'),
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
            'Nama_Santri' => $this->request->getPost('nama_santri'),
            'Periode_pembayaran' => $this->request->getPost('periode_pembayaran'),
            'Keterangan' => $this->request->getPost('keterangan'),
            'Tagihan' => $this->request->getPost('tagihan'),
            'Terbayar' => $this->request->getPost('terbayar'),
            'Status' => $this->request->getPost('status'),
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
