<?php

namespace App\Controllers;

use App\Models\ModelKelas;

class Data_Kelas extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelKelas = new ModelKelas();
    }
    public function index()
    {
        $data = [
            'title' => 'Kelas',
            'kelas' => $this->ModelKelas->allData(),
            'isi'    => 'admin/kelas'
        ];

        return view("layout/wrapper", $data);
    }

    // public function add()
    // {
    //     $data = [
    //         'kelas' => $this->request->getPost('kelas'),
    //     ];
    //     $this->ModelKelas->addData($data);

    //     session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
    //     return redirect()->to(base_url('data_kelas'));
    // }

    // public function edit($id_kelas)
    // {
    //     $data = [
    //         'id_kelas' => $id_kelas,
    //         'kelas' => $this->request->getPost('kelas'),
    //     ];
    //     $this->ModelKelas->editData($data);
    //     session()->setFlashdata('pesan', 'Data berhasil di update !!');
    //     return redirect()->to(base_url('data_kelas'));
    // }

    // public function delete($id_kelas)
    // {
    //     $data = [
    //         'id_kelas' => $id_kelas,
    //     ];
    //     $this->ModelKelas->deleteData($data);
    //     session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
    //     return redirect()->to(base_url('data_kelas'));
    // }
}
