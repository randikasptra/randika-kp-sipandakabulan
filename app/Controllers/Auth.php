<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $role = $this->request->getVar('role');

        $user = $model->where(['email' => $email, 'role' => $role])->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'logged_in' => true,
                ]);

                if ($user['role'] === 'admin') {
                    return redirect()->to('/dashboard/admin');
                } else {
                    return redirect()->to('/dashboard/user');
                }
            } else {
                return redirect()->back()->with('status', 'Password salah');
            }
        } else {
            return redirect()->back()->with('status', 'Email/Role tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
