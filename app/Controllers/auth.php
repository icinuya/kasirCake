<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('v_login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Set session data
                $session = session();
                $session->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'level' => $user['level']
                ]);

                // Redirect based on user level
                if ($user['level'] == 1) {
                    return redirect()->to(base_url('admin/dashboard'));
                } elseif ($user['level'] == 2) {
                    return redirect()->to(base_url('penjualan'));
                }
            }
        }

        // Jika login gagal, tampilkan pesan error
        return redirect()->to(base_url('auth'))->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('auth'));
    }
}
