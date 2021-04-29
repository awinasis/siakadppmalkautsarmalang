<?php

namespace App\Controllers;

use App\Models\ModelPesan;

class Data_Pesan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPesan = new ModelPesan();
    }
    public function index()
    {
        $data = [
            'title' => 'Pesan',
            'pesan' => $this->ModelPesan->allData(),
            'isi'    => 'admin/pesan',
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'Pesan' => $this->request->getPost('pesan'),
            'Tanggal' => $this->request->getPost('tanggal'),
        ];
        $this->ModelPesan->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_pesan'));
    }

    public function edit($id_pesan)
    {
        $data = [
            'id_pesan' => $id_pesan,
            'Pesan' => $this->request->getPost('pesan'),
            'Tanggal' => $this->request->getPost('tanggal'),
        ];
        $this->ModelPesan->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('data_pesan'));
    }

    public function delete($id_pesan)
    {
        $data = [
            'id_pesan' => $id_pesan,
        ];
        $this->ModelPesan->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_pesan'));
    }
}
