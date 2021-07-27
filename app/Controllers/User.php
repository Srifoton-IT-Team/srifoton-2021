<?php

namespace App\Controllers;

use App\Models\UserModel;
use Config\Services;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register()
    {
        session();
        $data = [
            'title' => 'Register',
            'validation' => Services::validation()
        ];

        return view('pages/account_register', $data);
    }

    public function registerSave()
    {
        // Validation rules
        $rules = [
            'email' => [
                'rules' => "required|valid_email|is_unique[users.email]",
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => "Email not valid",
                    'is_unique' => "Email has been registered"
                ]
            ],
            'password' => 'required|min_length[8]|max_length[12]',
            'confirm_password' => 'required|matches[password]',
            'full_name' => 'required|min_length[6]|max_length[255]',
            'nim' => 'required|min_length[10]|max_length[20]|is_unique[users.nim]',
            'university' => 'required|min_length[5]|max_length[200]',
            'whatsapp_num' => 'required|min_length[10]|max_length[16]'
        ];

        if ($this->validate($rules)) {
            // Get Data
            $data = [
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'full_name' => $this->request->getPost('full_name'),
                'nim' => $this->request->getPost('nim'),
                'university' => $this->request->getPost('university'),
                'whatsapp_num' => $this->request->getPost('whatsapp_num'),
            ];

            // Submit data
            $this->userModel->save($data);

            // Redirect to Login Page
            return redirect()->to('/login');
        } else {
            // Send error message to Register Page
            $validation = Services::validation();
            return redirect()->to('/register')->withInput()->with('validation', $validation);
        }

    }

    public function login()
    {
        if (session()->has('logged_in') && (session()->get('logged_in') === true)) {
            return redirect()->to('/dashboard');
        }
        $data = ['title' => 'Login'];
        return view('pages/account_login', $data);
    }

    public function loginVerify()
    {
        $session = session();
        $data_form = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];

        $data_db = $this->userModel->where('email', $data_form['email'])->first();

        if ($data_db) {
            $isPasswordVerify = password_verify($data_form['password'], $data_db['password']);
            if ($isPasswordVerify) {
                $session_data = [
                    'name' => $data_db['full_name'],
                    'logged_in' => TRUE
                ];
                $session->set($session_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashData('msg', 'Email not found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function dashboard()
    {
        // Validate has login or not
        $session = session();
        $session->get('logged_in');

        $data = [
            'title' => 'Dashboard'
        ];

        return view('pages/account_register', $data);
    }
}
