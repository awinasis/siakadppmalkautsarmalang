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
            'tgl_dibuat' => date('Y-m-d'),
            'tgl_diubah' => date('Y-m-d'),
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
            'tgl_diubah' => date('Y-m-d'),
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

    // public function change_visible($id_pengumuman)
    // {
    //     $DataPengumuman = $this->ModelPengumuman->where('id_pengumuman', $id_pengumuman)->first();

    //     $visible = $DataPengumuman['visible_pengumuman'];
    //     $newVisible = $visible == "1" ? "0" : "1";

    //     $this->ModelPengumuman->editData([
    //         'visible_pengumuman' => $newVisible
    //     ], $id_pengumuman);

    //     return redirect()->to(base_url('santri/index'));
    // }

    // public function change_visible($id_pengumuman)
    // {
    //     $this->ModelPengumuman->reset_visiblePengumuman();

    //     $data = [
    //         'id_pengumuman' => $id_pengumuman,
    //         'visible_pengumuman' => 1
    //     ];
    //     $this->ModelPengumuman->editData($data);
    //     session()->setFlashdata('pesan', 'Status Visible Pengumuman berhasil di ubah !!');
    //     return redirect()->to(base_url('pengumuman'));
    // }
}
