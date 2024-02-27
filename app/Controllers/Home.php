<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Home extends BaseController
{
    public function __construct()
    {
        $this->user = new ModelUser();
    }

    public function index()
    {
        $data = [

            'judul' => 'Login',
        ];
        return view('v_login', $data);
    }

    public function CekLogin()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Masih Kosong !',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Masih Kosong !',
                ]
            ]
        ])) {
            $username = $this->request->getPost('username');
            $password = md5($this->request->getPost('password'));
            $CekLogin = $this->user->LoginUser($username, $password);
            if ($CekLogin) {
                session()->set('id_user', $CekLogin['id_user']);
                session()->set('nama', $CekLogin['nama']);
                session()->set('level', $CekLogin['level']);
                if ($CekLogin['level'] == 1) {
                    return redirect()->to(base_url('Admin'));
                } else {
                    return redirect()->to(base_url('Penjualan'));
                }
            } else {
                session()->setFlashdata('gagal', ' Username Atau Password Salah.');
                return redirect()->to(base_url('Home'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Home'))->withInput('validation', \Config\Services::validation());
        }
    }

    public function Logout()
    {
        session()->remove('username');
        session()->remove('id_user');
        session()->remove('nama_user');
        session()->remove('level');
        session()->setFlashdata('pesan', ' Anda Berhasil Logout!');
        return redirect()->to(base_url('Home'));
    }
}
