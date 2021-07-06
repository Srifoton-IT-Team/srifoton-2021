<?php

namespace App\Controllers;

use App\Models\AccountModel;

class Register extends BaseController
{
    // Index for registration
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('pages/AccountRegister', $data);
    }

    // Submission function that run when a user completed the form
    public function submit()
    {
        helper(['form']);

        // Rules for register validation
        $rules = [
            'name'          => 'required',
            'nim'           => 'required|is_unique[accounts.nim]',
            'university'    => 'required',
            'whatsapp'      => 'required|min_length[11]',
            'email'         => 'required|valid_email|is_unique[accounts.email]',
            'password'      => 'required|min_length[8]',
            'confpwd'       => 'required|matches[password]',
        ];

        /**
         * If validation is successful, store validated data to accounts table inside the database
         * Password hashing happens here.
         */
        if ($this->validate($rules)) {
            $model = New AccountModel();
            $data = [
                'name'          => $this->request->getVar('name'),
                'nim'           => $this->request->getVar('nim'),
                'university'    => $this->request->getVar('university'),
                'whatsapp'      => $this->request->getVar('whatsapp'),
                'email'         => $this->request->getVar('email'),
                'password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->save($data);
            // Redirect to login page if validation success and data has stored
            return redirect()->to('/login');
        } else {
            // Returns to register page if validation failed
            $data['validation'] = $this->validator;
            echo view('pages/AccountRegister', $data);
        }
    }
}