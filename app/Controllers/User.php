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

    public function index()
    {

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
}
