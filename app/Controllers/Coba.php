<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CobaModel;

class Coba extends BaseController {
    protected $helpers = [];

    public function __construct() {
        $this->userModel = new CobaModel();
    }

    public function index() {
        $data['users'] = $this->userModel->findAll();
        return view('coba/index', $data);
    }

    public function create() {
        return view('coba/create');
    }

    public function store() {
        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'phone' => 'required'
        ];

        if (!$this->validate($rules)) {
            $response['error'] = true;
            $response['validation'] = $this->validator->getErrors();
        } else {
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone')
            ];
            $this->userModel->insert($data);
            $response['error'] = false;
            $response['message'] = 'User has been created successfully.';
        }

        echo json_encode($response);
    }

    public function edit($id) {
        $data['user'] = $this->userModel->find($id);
        return view('users/edit', $data);
    }

    public function update() {
        $id = $this->request->getPost('id');
        $rules = [
            'name' => 'required',
            'email' => "required|valid_email|is_unique[users.email,id,$id]",
            'phone' => 'required'
        ];

        if (!$this->validate($rules)) {
            $response['error'] = true;
            $response['validation'] = $this->validator->getErrors();
        } else {
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone')
            ];

            $this->userModel->update($id, $data);
            $response['error'] = false;
            $response['message'] = 'User has been updated successfully.';
        }
        echo json_encode($response);
    }

    public function delete($id) {
        $this->userModel->delete($id);
        return redirect()->to('/');
    }
}
