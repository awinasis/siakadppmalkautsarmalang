<?php

namespace App\Controllers;

use App\Models\ModelRapor;

class Data_Rapor extends BaseController
{
    protected $ModelRapor;

    public function __construct()
    {
        helper('form');
        $this->ModelRapor = new ModelRapor();
    }
    public function index()
    {
        $data = [
            'title' => 'Rapor',
            'rapor' => $this->ModelRapor->allData(),
            'isi'    => 'admin/rapor',
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_Kelamin' => $this->request->getPost('jenis_kelamin'),
        ];
        $this->ModelRapor->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('data_rapor'));
    }

    public function edit($id_rapor)
    {
        $data = [
            'id_rapor' => $id_rapor,
            'NIS' => $this->request->getPost('NIS'),
            'nama_santri' => $this->request->getPost('nama_santri'),
            'Jenis_Kelamin' => $this->request->getPost('jenis_kelamin'),
        ];
        $this->ModelRapor->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('data_rapor'));
    }

    public function delete($id_rapor)
    {
        $data = [
            'id_rapor' => $id_rapor,
        ];
        $this->ModelRapor->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_rapor'));
    }
}
