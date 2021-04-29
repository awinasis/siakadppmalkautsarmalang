<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAuth = new ModelAuth();
    }

    public function index()
    {
        $data = [
            'title' => 'Login',
            'isi'    => 'login'
        ];

        return view("layout/wrapper", $data);
    }

    public function cek_login()
    {
        $level = $this->request->getPost('level');

        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !!'
                ]
            ],

            'level' => [
                'label' => 'Level',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !!'
                ]
            ],

            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !!'
                ],
            ]

        ])) {
            //jika valid
            // $level = $this->request->getPost('level');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $cek_user = $this->ModelAuth->login_user($username, $password);

            if (($cek_user['username'])) {

                if ($cek_user) {
                    //jika data benar
                    session()->set('log', true);
                    session()->set('username', $cek_user['username']);
                    session()->set('nama', $cek_user['nama_user']);
                    session()->set('foto', $cek_user['foto']);
                    session()->set('level', $level);
                    //login
                    return redirect()->to(base_url('/admin'));
                } else {
                    //jika data tidak sesuai
                    session()->setFlashdata('pesan', 'Login gagal ! Username or Password salah !!');
                    return redirect()->to(base_url('auth/index'));
                }
            } else if ($level == 2) {
                $cek_user = $this->ModelAuth->login_user($username, $password);
                if ($cek_user) {
                    //jika data benar
                    session()->set('log', true);
                    session()->set('username', $cek_user['username']);
                    session()->set('nama', $cek_user['nama_user']);
                    session()->set('foto', $cek_user['foto']);
                    session()->set('level', $level);
                    //login
                    return redirect()->to(base_url('/guru'));
                } else {
                    //jika data tidak sesuai
                    session()->setFlashdata('pesan', 'Login gagal ! Username or Password salah !!');
                    return redirect()->to(base_url('auth/index'));
                }
            } else if ($level == 3) {
                $cek_user = $this->ModelAuth->login_user($username, $password);
                if ($cek_user) {
                    //jika data benar
                    session()->set('log', true);
                    session()->set('username', $cek_user['username']);
                    session()->set('nama', $cek_user['nama_user']);
                    session()->set('foto', $cek_user['foto']);
                    session()->set('level', $level);
                    //login
                    return redirect()->to(base_url('/santri'));
                } else {
                    //jika data tidak sesuai
                    session()->setFlashdata('pesan', 'Login gagal ! Username or Password salah !!');
                    return redirect()->to(base_url('auth/index'));
                }
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/index'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('nama');
        session()->remove('foto');
        session()->remove('level');
        session()->setFlashdata('sukses', 'Logout Success !!');
        return redirect()->to(base_url('auth/index'));
    }
}
