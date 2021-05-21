<?php

namespace App\Controllers;

use App\Models\ModelTA;

class Tahun_Akademik extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelTA = new ModelTA();
    }

    public function index()
    {
        $data = [
            'title' => 'Tahun Akademik',
            'ta' => $this->ModelTA->allData(),
            'isi'    => 'admin/tahunAkademik'
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'Tahun_Akademik' => $this->request->getPost('tahun_akademik'),
        ];
        $this->ModelTA->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('tahun_akademik'));
    }

    public function edit($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
            'Tahun_Akademik' => $this->request->getPost('tahun_akademik'),
        ];
        $this->ModelTA->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('tahun_akademik'));
    }

    public function delete($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
        ];
        $this->ModelTA->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('tahun_akademik'));
    }

    public function setting()
    {
        $data = [
            'title' => 'Tahun Akademik',
            'ta' => $this->ModelTA->allData(),
            'isi'    => 'admin/setting_TA'
        ];

        return view("layout/wrapper", $data);
    }

    public function set_status_ta($id_ta)
    {
        //reset status ta
        $this->ModelTA->reset_status_ta();

        //setting status ta
        $data = [
            'id_ta' => $id_ta,
            'status_ta' => 1
        ];
        $this->ModelTA->editData($data);
        session()->setFlashdata('pesan', 'Status Tahun Akademik berhasil di ubah !!');
        return redirect()->to(base_url('tahun_akademik/setting'));
    }
}
