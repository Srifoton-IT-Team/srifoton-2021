<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $userModel = new UserModel();
    }

    public function index()
    {

    }

    public function register()
    {
        $data = [
            'title' => 'Register'
        ];

        return view('pages/account_register', $data);
    }

    public function registerSave()
    {
        $this->userModel->save([
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'full_name' => $this->request->getPost('full_name'),
            'nim' => $this->request->getPost('nim'),
            'university' => $this->request->getPost('university'),
            'whatsapp_num' => $this->request->getPost('whatsapp_num'),
        ]);
        dd($this->request->getPost());

    }
}
