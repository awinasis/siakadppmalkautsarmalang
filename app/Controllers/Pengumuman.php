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
        // $pengumuman = $this->ModelPengumuman->where('id_pengumuman', $id_pengumuman)->findAll();
        $data = [
            'id_pengumuman' => $id_pengumuman,
            'Tgl_dibuat' => $this->request->getPost('tgl_dibuat'),
            'Judul_pengumuman' => $this->request->getPost('judul_pengumuman'),
            'Isi_pengumuman' => $this->request->getPost('isi_pengumuman'),
            // 'pengumuman' => $pengumuman
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

    public function editPengumuman($id)
    {
        $pengumuman = $this->ModelPengumuman->where('id_pengumuman', $id)->findAll();
        $data = [
            'title' => 'Edit Pengumuman',
            'pengumuman' => $pengumuman
        ];
        return view("layout/wrapper", $data);
    }


    public function change_visible($id_pengumuman)
    {
        $pengumuman = $this->ModelPengumuman->where('id_pengumuman', $id_pengumuman)->first();
        $visible = $pengumuman['visible_pengumuman'];
        $VisiblePengumuman = $visible == "1" ? "0" : "1";
        $this->ModelPengumuman->update_data([
            'visiblePengumuman' => $VisiblePengumuman
        ], $id_pengumuman);
        return redirect()->to(base_url('pengumuman'));
    }
}
