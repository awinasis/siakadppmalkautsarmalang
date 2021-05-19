<?php

namespace App\Controllers;

use App\Models\ModelMateri;

class Data_Materi extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelMateri = new ModelMateri();
    }
    public function index()
    {
        $data = [
            'title' => 'materi',
            'materi' => $this->ModelMateri->allData(),
            'isi'    => 'admin/materi'
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'Nama_Materi' => $this->request->getPost('nama_materi'),
            'kelas' => $this->request->getPost('kelas'),
        ];
        $this->ModelMateri->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_materi'));
    }

    public function edit($id_materi)
    {
        $data = [
            'id_materi' => $id_materi,
            'Nama_Materi' => $this->request->getPost('nama_materi'),
            'kelas' => $this->request->getPost('kelas'),
        ];
        $this->ModelMateri->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('data_materi'));
    }

    public function delete($id_materi)
    {
        $data = [
            'id_materi' => $id_materi,
        ];
        $this->ModelMateri->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_materi'));
    }
}
