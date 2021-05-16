<?php

namespace App\Controllers;

use App\Models\ModelUserManagement;
use App\Models\ModelSantri;

class Data_user extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelUserManagement = new ModelUserManagement();
        $this->ModelSantri = new ModelSantri();
    }
    public function index()
    {
        $data = [
            'title' => 'User',
            'user' => $this->ModelUserManagement->allData(),
            'santri' => $this->ModelSantri->allData(),
            'isi'    => 'admin/user_management'
        ];

        return view("layout/wrapper", $data);
    }

    public function add()
    {
        if ($this->validate([
            'foto' => [
                'label' => 'Foto',
                'rules' => 'uploaded[foto]|max_size[foto, 5000]|mime_in[foto,image/png,image/jpeg,image/jpg,image/gif]',
                'errors' => [
                    'uploaded' => '{field} wajib diisi !!',
                    'max_size' => '{field} Max 5000 KB',
                    'mime_in' => 'Format {field} Wajib PNG, JPEG, JPG, GIF'
                ],
            ]
        ])) {
            //jika valid

            //mengambil file foto dari form input
            $foto = $this->request->getFile('foto');
            //merename file foto
            $nama_file = $foto->getRandomName();
            //jika valid
            $data = array(
                'nama_santri' => $this->request->getPost('nama_santri'),
                'Username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'level' => $this->request->getPost('level'),
                'foto' =>  $nama_file,
            );
            $foto->move('foto', $nama_file);
            $this->ModelUserManagement->addData($data);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan !!');
            return redirect()->to(base_url('data_user'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('data_user'));
        }
    }

    public function edit($id_user)
    {
        if ($this->validate([
            'foto' => [
                'label' => 'Foto',
                'rules' => 'max_size[foto, 5000]|mime_in[foto,image/png,image/jpeg,image/jpg,image/gif]',
                'errors' => [
                    'max_size' => '{field} Max 5000 KB',
                    'mime_in' => 'Format {field} Wajib PNG, JPEG, JPG, GIF'
                ],
            ]
        ])) {
            //jika valid

            //mengambil file foto dari form input
            $foto = $this->request->getFile('foto');

            if ($foto->getError() == 4) {
                # code...
                $data = array(
                    'id_user' => $id_user,
                    'nama_santri' => $this->request->getPost('nama_santri'),
                    'Username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                    'level' => $this->request->getPost('level'),
                );
                $this->ModelUserManagement->editData($data);
            } else {
                # code...
                //menghapus foto lama
                $user = $this->ModelUserManagement->detail_data($id_user);
                if ($user['foto'] != "") {
                    # code...
                    unlink('foto/' . $user['foto']);
                }
                //merename file foto
                $nama_file = $foto->getRandomName();
                //jika valid
                $data = array(
                    'id_user' => $id_user,
                    'nama_santri' => $this->request->getPost('nama_santri'),
                    'Username' => $this->request->getPost('username'),
                    'password' => $this->request->getPost('password'),
                    'level' => $this->request->getPost('level'),
                    'foto' => $nama_file,
                );
                $foto->move('foto', $nama_file);
                $this->ModelUserManagement->editData($data);
            }
            session()->setFlashdata('pesan', 'Data berhasil diupdate !!');
            return redirect()->to(base_url('data_user'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('data_user'));
        }
    }

    public function delete($id_user)
    {
        //menghapus foto lama
        $user = $this->ModelUserManagement->detail_data($id_user);
        if ($user['foto'] != "") {
            # code...
            unlink('foto/' . $user['foto']);
        }
        $data = [
            'id_user' => $id_user,
        ];
        $this->ModelUserManagement->deleteData($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus !!');
        return redirect()->to(base_url('data_user'));
    }
}
