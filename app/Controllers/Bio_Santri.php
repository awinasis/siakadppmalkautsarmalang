<?php

namespace App\Controllers;

use App\Models\ModelSantri;

class Bio_Santri extends BaseController
{
    protected $ModelSantri;

    public function __construct()
    {
        helper('form');
        $this->ModelSantri = new ModelSantri();
    }
    public function index()
    {
        // if (session()->get('level') == "Guru") {
        //     $reportSantri = $this->ModelSantri->orderBy('NIS', 'desc')->findAll();
        // } else {
        //     $reportSantri = $this->ModelSantri->where('NIS', session()->get('id_santri'))->orderBy('id_santri', 'desc')->findAll();
        // }
        // $reportSantri = $this->ModelSantri->findAll();

        $data = [
            'title' => 'Santri',
            'santri' => $this->ModelSantri->allData(),
            'isi'    => 'admin/santri',
            // 'reportSantri' => $reportSantri,
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'NIS' => $this->request->getPost('NIS'),
            'nama_santri' => $this->request->getPost('nama_santri'),
            'Tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'Tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'noTelp' => $this->request->getPost('noTelp'),
            'Universitas' => $this->request->getPost('universitas'),
            'Fakultas' => $this->request->getPost('fakultas'),
            'Jurusan_Prodi' => $this->request->getPost('jurusan_prodi'),
            'Kelas_santri' => $this->request->getPost('kelas_santri'),
            'Angkatan_santri' => $this->request->getPost('angkatan_santri'),
            'Nama_Ayah' => $this->request->getPost('nama_ayah'),
            'NoTelp_ortu' => $this->request->getPost('noTelp_ortu')
        ];
        $this->ModelSantri->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('bio_santri'));
    }

    public function edit($id_santri)
    {
        $data = [
            'id_santri' => $id_santri,
            'NIS' => $this->request->getPost('NIS'),
            'nama_santri' => $this->request->getPost('nama_santri'),
            'Tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'Tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'Jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'noTelp' => $this->request->getPost('noTelp'),
            'Universitas' => $this->request->getPost('universitas'),
            'Fakultas' => $this->request->getPost('fakultas'),
            'Jurusan_prodi' => $this->request->getPost('jurusan_prodi'),
            'Kelas_santri' => $this->request->getPost('kelas_santri'),
            'Angkatan_santri' => $this->request->getPost('angkatan_santri'),
            'Nama_Ayah' => $this->request->getPost('nama_ayah'),
            'NoTelp_ortu' => $this->request->getPost('noTelp_ortu')
        ];
        $this->ModelSantri->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('bio_santri'));
    }

    public function delete($id_santri)
    {
        $data = [
            'id_santri' => $id_santri,
        ];
        $this->ModelSantri->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('bio_santri'));
    }

    public function viewBiodataSantri($id_santri)
    {
        if (session()->get('level') == "Santri") {
            $reportSantri = $this->ModelSantri->orderBy('id_santri', 'desc')->findAll();
        } else {
            $reportSantri = $this->ModelSantri->where('id_santri', session()->get('id_santri'))->orderBy('id_santri', 'desc')->findAll();
        }
        $reportSantri = $this->ModelSantri->findAll();

        $data = [
            'title' => 'Biodata Santri',
            'santri' => $this->ModelSantri->detail_data($id_santri),
            'isi'    => 'admin/v_bioSantri',
            'reportSantri' => $reportSantri
        ];

        return view("layout/wrapper", $data);
    }
}
