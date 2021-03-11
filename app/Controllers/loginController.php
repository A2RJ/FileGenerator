<?php

namespace App\Controllers;

use App\Models\loginModel;

class loginController extends BaseController
{
    protected $login;

    public function __construct()
    {
        $this->login = new loginModel();
    }

    public function index()
    {
        $data = [
            'login' => $this->login->findAll()
        ];

        return view('login/index', $data);
    }

    public function add()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('login/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'id' => [
                'rules' => 'required[login.id]',
                'errors' => [
                    'required' => 'id harus diisi.'
                ]
            ],
'username' => [
                'rules' => 'required[login.username]',
                'errors' => [
                    'required' => 'username harus diisi.'
                ]
            ],
'password' => [
                'rules' => 'required[login.password]',
                'errors' => [
                    'required' => 'password harus diisi.'
                ]
            ],
'hak_akses' => [
                'rules' => 'required[login.hak_akses]',
                'errors' => [
                    'required' => 'hak_akses harus diisi.'
                ]
            ],

        ])) {
            return redirect()->to('/loginController/add')->withInput();
        }

        $this->login->save([
            "username" => $this->request->getVar("username"),
"password" => $this->request->getVar("password"),
"hak_akses" => $this->request->getVar("hak_akses"),

        ]);
        session()->setflashdata("pesan", "login berhasil ditambahkan.");
        return redirect()->to("/loginController");
    }

    public function update($id)
    {
        $data = [
            'login' => $this->login->find($id),
            'validation' => \Config\Services::validation()
        ];
        return view('login/update', $data);
    }

    public function saveUpdate()
    {
        if (!$this->validate([
            'id' => [
                'rules' => 'required[login.id]',
                'errors' => [
                    'required' => 'id harus diisi.'
                ]
            ],
'username' => [
                'rules' => 'required[login.username]',
                'errors' => [
                    'required' => 'username harus diisi.'
                ]
            ],
'password' => [
                'rules' => 'required[login.password]',
                'errors' => [
                    'required' => 'password harus diisi.'
                ]
            ],
'hak_akses' => [
                'rules' => 'required[login.hak_akses]',
                'errors' => [
                    'required' => 'hak_akses harus diisi.'
                ]
            ],

        ])) {
            return redirect()->to('/loginController/update/' . $this->request->getVar('id'))->withInput();
        }

        $this->login->save([
            "id" => $this->request->getVar("id"),
"username" => $this->request->getVar("username"),
"password" => $this->request->getVar("password"),
"hak_akses" => $this->request->getVar("hak_akses"),

        ]);
        session()->setflashdata("pesan", "login berhasil ditambahkan.");
        return redirect()->to("/loginController");
    }

    public function delete($id)
    {
        $this->login->delete($id);
        return redirect()->to("/loginController");
    }

    public function detail($id)
    {
        $data = [
            'login' => $this->login->find($id)
        ];

        return view('login/detail', $data);
    }
}
