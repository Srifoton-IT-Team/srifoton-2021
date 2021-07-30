<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
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
//            $validation = Services::validation();
//            return redirect()->to('/register')->withInput()->with('validation', $validation);
            return redirect()->to('/register')->withInput();
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
                    'logged_in' => TRUE,
                    'userId' => $data_db['id']
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
        if (!(session()->has('logged_in') && (session()->get('logged_in') === true))) {
            return redirect()->to('/login');
        }

        $data_db = $this->userModel->where('id', session()->get('userId'))->first();
        $data = [
            'title' => 'Dashboard',
            'name' => $data_db['full_name'],
            'valid_uiux' => $data_db['valid_uiux'],
            'valid_cp' => $data_db['valid_cp'],
            'valid_photography' => $data_db['valid_photography']
        ];
        return view('pages/AccountDashboard', $data);
    }

    public function uploadImage()
    {
        // Validate has login or not
        if (!(session()->has('logged_in') && (session()->get('logged_in') === true))) {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Upload Image',
            'validation' => Services::validation()
        ];
        return view('pages/AccountUploadImages', $data);
    }

    public function uploadImageVerify()
    {
        // Validate has login or not
        if (!(session()->has('logged_in') && (session()->get('logged_in') === true))) {
            return redirect()->to('/login');
        }

        $competitionType = $this->request->getPost('competition');
        if (!($competitionType === "image_cp" || $competitionType === "image_uiux" || $competitionType === "image_photo")) {
            throw new \Exception("Competition type not valid");
        }

        $rules = [
            'imageFile' => [
                'rules' => 'uploaded[imageFile]|max_size[imageFile,1024]|is_image[imageFile]|mime_in[imageFile,image/jpg,image/jpeg,image/png]',
            ]
        ];
        if ($this->validate($rules)) {
            $image = $this->request->getFile('imageFile');
            $newName = $image->getRandomName();
            $image->move('users', $newName);
            $data = [
                $competitionType => $newName
            ];

            $this->userModel->update(session()->get('userId'), $data);
            return $this->dashboard();
        } else {
            return redirect()->to('/dashboard/uploadImage')->withInput();
        }
    }
}
