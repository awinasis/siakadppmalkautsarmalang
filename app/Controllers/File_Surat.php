<?php

namespace App\Controllers;

use App\Models\ModelSurat;

class File_Surat extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelSurat = new ModelSurat();
    }
    public function index()
    {
        $data = [
            'title' => 'Surat',
            'surat' => $this->ModelSurat->allData(),
            'isi'    => 'admin/surat'
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        if ($this->validate([
            'file' => [
                'label' => 'File',
                'rules' => 'uploaded[file]|max_size[file, 5000]|ext_in[file,pdf]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi !!',
                    'max_size' => '{field} Max 5000 KB',
                    'ext_in' => 'Format {field} Wajib .PDF'
                ],
            ]
        ])) {
            //jika valid

            //mengambil file foto dari form input
            $file = $this->request->getFile('file');
            //merename file foto
            $nama_file = $file->getRandomName();
            $ukuran_file = $file->getSize();
            //jika valid
            $data = array(
                'Nama_Surat' => $this->request->getPost('nama_surat'),
                'Kategori' => $this->request->getPost('kategori'),
                'tgl_upload' => date('Y-m-d'),
                'tgl_update' => date('Y-m-d'),
                'file' =>  $nama_file,
                'ukuran_file' => $ukuran_file,
            );
            $file->move('file_arsip', $nama_file);
            $this->ModelSurat->addData($data);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan !!');
            return redirect()->to(base_url('file_surat'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('file_surat'));
        }
    }

    public function edit($id_surat)
    {
        if ($this->validate([
            'file' => [
                'label' => 'File',
                'rules' => 'max_size[file, 5000]|ext_in[file,pdf]',
                'errors' => [
                    'max_size' => '{field} Max 5000 KB',
                    'ext_in' => 'Format {field} Wajib .PDF'
                ],
            ]
        ])) {
            //jika valid

            //mengambil file dari form input
            $file = $this->request->getFile('file');

            if ($file->getError() == 4) {
                # code...
                $data = array(
                    'id_surat' => $id_surat,
                    'Nama_Surat' => $this->request->getPost('nama_surat'),
                    'Kategori' => $this->request->getPost('kategori'),
                    'tgl_update' => date('Y-m-d'),
                );
                $this->ModelSurat->editData($data);
            } else {
                # code...
                //menghapus file lama
                $user = $this->ModelSurat->detail_data($id_surat);
                if ($user['file'] != "") {
                    # code...
                    unlink('file_arsip/' . $user['file']);
                }
                //merename file
                $nama_file = $file->getRandomName();
                $ukuran_file = $file->getSize();
                //jika valid
                $data = array(
                    'id_surat' => $id_surat,
                    'Nama_Surat' => $this->request->getPost('nama_surat'),
                    'Kategori' => $this->request->getPost('kategori'),
                    'tgl_update' => date('Y-m-d'),
                    'file' =>  $nama_file,
                    'ukuran_file' => $ukuran_file,
                );
                $file->move('file_arsip', $nama_file);
                $this->ModelSurat->editData($data);
            }
            session()->setFlashdata('pesan', 'Data berhasil diupdate !!');
            return redirect()->to(base_url('file_surat'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('file_surat'));
        }
    }

    public function delete($id_surat)
    {
        //menghapus file lama
        $user = $this->ModelSurat->detail_data($id_surat);
        if ($user['file'] != "") {
            # code...
            unlink('file_arsip/' . $user['file']);
        }
        $data = [
            'id_surat' => $id_surat,
        ];
        $this->ModelSurat->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('file_surat'));
    }

    public function viewpdf($id_surat)
    {
        $data = [
            'title' => 'View Surat',
            'surat' => $this->ModelSurat->detail_data($id_surat),
            'isi'    => 'admin/v_viewpdf'
        ];

        return view("layout/wrapper", $data);
    }

    public function detail_pengajuansurat()
    {
        $data = [
            'title' => 'Surat',
            'surat' => $this->ModelSurat->allData(),
            'isi'    => 'admin/surat'
        ];

        return view("layout/wrapper", $data);
    }
}
