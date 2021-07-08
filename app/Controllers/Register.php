<?php


namespace App\Controllers;


use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        return view('pages/account_register', $data);
    }

    public function save()
    {
        helper(['form']);
        $rules = [
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confirm-password' => 'matches[password]',
            'name' => 'required|min_length[6]|max_length[200]',
            'nim' => 'required|min_length[11]|max_length[20]',
            'university' => 'required|min_length[1]|max_length[200]',
            'whatsapp' => 'required|min_length[10]|max_length[16]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'email' => $this->request->getVar('email'),
                'fullname' => $this->request->getVar('name'),
                'nim_nisn' => $this->request->getVar('nim'),
                'nomor_telephone_whatsapp' => $this->request->getVar('whatsapp'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'universitas_sekolah' => $this->request->getVar('university')
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('pages/account_register', $data);
        }
    }
}