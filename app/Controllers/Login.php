<?php


namespace App\Controllers;


use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view('pages/account_login');
    }

    public function verify()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password_from_form = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();

        if ($data) {
            $password_in_database = $data['password'];
            $verify_password = password_verify($password_from_form, $password_in_database);
            if ($verify_password) {
                $session_data = [
                    'id' => $data['id'],
                    'email' => $data['email'],
                    'name' => $data['fullname'],
                    'logged_in' => TRUE
                ];
                $session->set($session_data);
                return redirect()->to('/');
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
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}