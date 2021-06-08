<?php

namespace App\Controllers;

use App\Models\ModelPengumuman;

class Pengumuman extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelPengumuman = new ModelPengumuman();
    }
    public function index()
    {
        // $pengumuman = $this->ModelPengumuman->orderBy('id_pengumuman', 'desc')->findAll();
        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $this->ModelPengumuman->allData(),
            'isi'    => 'admin/pengumuman',
            // 'pengumuman' => $pengumuman
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        $data = [
            'Tgl_dibuat' => $this->request->getPost('tgl_dibuat'),
            'Judul_pengumuman' => $this->request->getPost('judul_pengumuman'),
            'Isi_pengumuman' => $this->request->getPost('isi_pengumuman'),
        ];
        $this->ModelPengumuman->addData($data);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan !!');
        return redirect()->to(base_url('pengumuman'));
    }

    public function edit($id_pengumuman)
    {
        $data = [
            'id_pengumuman' => $id_pengumuman,
            'Tgl_dibuat' => $this->request->getPost('tgl_dibuat'),
            'Judul_pengumuman' => $this->request->getPost('judul_pengumuman'),
            'Isi_pengumuman' => $this->request->getPost('isi_pengumuman'),
        ];
        $this->ModelPengumuman->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di update !!');
        return redirect()->to(base_url('pengumuman'));
    }

    public function delete($id_pengumuman)
    {
        $data = [
            'id_pengumuman' => $id_pengumuman,
        ];
        $this->ModelPengumuman->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('pengumuman'));
    }

    public function change_visible($id_pengumuman)
    {
        $data = [
            'id_pengumuman' => $id_pengumuman,
            'visible_pengumuman' => 1
        ];
        $this->ModelPengumuman->editData($data);
        session()->setFlashdata('pesan', 'Status Visible Pengumuman berhasil di ubah !!');
        return redirect()->to(base_url('pengumuman'));
    }
}
