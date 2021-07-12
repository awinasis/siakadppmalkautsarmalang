<?php

namespace App\Controllers;

use App\Models\ModelRapor;
use App\Models\ModelTA;
use App\Models\ModelNilai;
use App\Models\ModelSantri;

class Data_Rapor extends BaseController
{
    public function __construct()
    {
        helper('form', 'url');
        $this->ModelRapor = new ModelRapor();
        $this->ModelTA = new ModelTA();
        $this->ModelNilai = new ModelNilai();
        $this->ModelSantri = new ModelSantri();
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
        ];
        $this->ModelRapor->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
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

    public function view_rapor($id_rapor)
    {
        $data = [
            'title' => 'View Rapor',
            'rapor' => $this->ModelRapor->detail_data($id_rapor),
            'ta_aktif' => $this->ModelTA->ta_aktif(),
            'nilai' => $this->ModelNilai->allData(),
            'nilai' => $this->ModelNilai->allData2(),
            'nilai' => $this->ModelNilai->allData3(),
            'nilai' => $this->ModelNilai->allData4(),
            'nilai' => $this->ModelNilai->allData6(),
            'nilai' => $this->ModelNilai->allData7(),
            'santri' => $this->ModelNilai->allData(),
            'isi'    => 'admin/v_viewRapor'
        ];

        return view("layout/wrapper", $data);
    }
}
