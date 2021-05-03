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
        // $level = $this->request->getPost('level');

        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi !!'
                ]
            ],

            // 'level' => [
            //     'label' => 'Level',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} wajib diisi !!'
            //     ]
            // ],

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

            if (($cek_user['username'] == $username) && ($cek_user['password'] == $password)) {
                //jika data benar
                session()->set('log', true);
                session()->set('username', $cek_user['username']);
                session()->set('nama', $cek_user['nama_user']);
                session()->set('foto', $cek_user['foto']);
                session()->set('level', $cek_user['level']);
                //login
                if ($cek_user["level"] == "Admin") {
                    return redirect()->to(base_url('/admin'));
                } else if ($cek_user["level"] == "Guru") {
                    return redirect()->to(base_url('/guru'));
                } else if ($cek_user["level"] == "Santri") {
                    return redirect()->to(base_url('/santri'));
                } else {
                    session()->setFlashdata('pesan', 'Login gagal ! Username or Password salah !!');
                    return view('auth/index');
                }
            } else {
                session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                return redirect()->to(base_url('auth/auth'));
            }
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
