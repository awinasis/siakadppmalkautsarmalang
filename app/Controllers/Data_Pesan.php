<?php

namespace App\Controllers;

use App\Models\ModelPesan;
use App\Models\ModelSantri;

class Data_Pesan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPesan = new ModelPesan();
        $this->ModelSantri = new ModelSantri();
    }
    public function index()
    {
        $data = [
            'title' => 'Pesan',
            'pesan' => $this->ModelPesan->allData(),
            'santri' => $this->ModelSantri->allData(),
            'isi'    => 'admin/pesan',
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'Pesan' => $this->request->getPost('pesan'),
            'date_created' => date('Y-m-d'),
            'date_updated' => date('Y-m-d'),
        ];
        $this->ModelPesan->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_pesan'));
    }

    public function edit($id_pesan)
    {
        $data = [
            'id_pesan' => $id_pesan,
            'NIS' => $this->request->getPost('NIS'),
            'Pesan' => $this->request->getPost('pesan'),
            'date_updated' => date('Y-m-d'),
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
