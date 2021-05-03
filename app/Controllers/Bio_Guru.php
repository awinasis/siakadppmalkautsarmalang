<?php

namespace App\Controllers;

use App\Models\ModelGuru;
use App\Models\ModelAbsensi;

class Bio_Guru extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelGuru = new ModelGuru();
        $this->ModelAbsensi = new ModelAbsensi();
    }
    public function index()
    {
        // if (session()->get('level') == "Admin") {
        //     $reportAbsen = $this->ModelAbsensi->orderBy('NIS', 'desc')->findAll();
        // } else {
        //     $reportAbsen = $this->ModelAbsensi->where('NIS', session()->get('id_santri'))->orderBy('id_santri', 'desc')->findAll();
        // }
        // $reportAbsen = $this->ModelAbsensi->findAll();

        $data = [
            'title' => 'Guru',
            'guru' => $this->ModelGuru->allData(),
            'isi'    => 'admin/guru',
            // 'reportAbsen' => $reportAbsen
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'nama_guru' => $this->request->getPost('nama_guru'),
            'Tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'Tanggal_lahir' => date('d-m-Y'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat_asal_daerah' => $this->request->getPost('alamat_asal_daerah'),
            'noTelp' => $this->request->getPost('noTelp'),
        ];
        $this->ModelGuru->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('bio_guru'));
    }

    public function edit($id_guru)
    {
        $data = [
            'id_guru' => $id_guru,
            'nama_guru' => $this->request->getPost('nama_guru'),
            'Tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'Tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat_asal_daerah' => $this->request->getPost('alamat_asal_daerah'),
            'noTelp' => $this->request->getPost('noTelp'),
        ];
        $this->ModelGuru->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('bio_guru'));
    }

    public function delete($id_guru)
    {
        $data = [
            'id_guru' => $id_guru,
        ];
        $this->ModelGuru->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('bio_guru'));
    }
}
