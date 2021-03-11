<?php

namespace App\Controllers;

use App\Models\GeneratorModel;

class GeneratorController extends BaseController
{
    protected $Generator;

    public function __construct()
    {
        $this->Generator = new GeneratorModel();
    }

    public function index()
    {
        $data = [
            'Generator' => $this->Generator->findAll()
        ];

        return view('Generator/index', $data);
    }

    public function add()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('Generator/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            VALIDATES
        ])) {
            return redirect()->to('/GeneratorController/add')->withInput();
        }

        $this->Generator->save([
            SAVE
        ]);
        session()->setflashdata("pesan", "Generator berhasil ditambahkan.");
        return redirect()->to("/GeneratorController");
    }

    public function update($id)
    {
        $data = [
            'Generator' => $this->Generator->find($id),
            'validation' => \Config\Services::validation()
        ];
        return view('Generator/update', $data);
    }

    public function saveUpdate()
    {
        if (!$this->validate([
            VALIDATES
        ])) {
            return redirect()->to('/GeneratorController/update/' . $this->request->getVar('id'))->withInput();
        }

        $this->Generator->save([
            STORE
        ]);
        session()->setflashdata("pesan", "Generator berhasil ditambahkan.");
        return redirect()->to("/GeneratorController");
    }

    public function delete($id)
    {
        $this->Generator->delete($id);
        return redirect()->to("/GeneratorController");
    }

    public function detail($id)
    {
        $data = [
            'Generator' => $this->Generator->find($id)
        ];

        return view('Generator/detail', $data);
    }
}
