<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\API\ResponseTrait;

class Mahasiswa extends BaseController {
    protected $format = 'json';
    use ResponseTrait;

    public function __construct() {
        $this->model = new MahasiswaModel();
    }

    public function index() {
        return view('coba/index');
    }

    public function create() {
        return view('mahasiswa/create');
    }

    public function store() {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|valid_email|is_unique[mahasiswa.email]'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if (!$isDataValid) {
            return $this->fail($validation->getErrors());
        }

        $data = $this->request->getPost();
        $this->model->insert($data);
        return $this->respondCreated(['message' => 'Data berhasil ditambahkan']);
    }

    public function edit($id = null) {
        $mahasiswa = $this->model->find($id);
        if (!$mahasiswa) {
            return $this->failNotFound('Data tidak ditemukan');
        }
        return view('mahasiswa/edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update($id = null) {
        $mahasiswa = $this->model->find($id);
        if (!$mahasiswa) {
            return $this->failNotFound('Data tidak ditemukan');
        }

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|valid_email|is_unique[mahasiswa.email,id,' . $id . ']'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if (!$isDataValid) {
            return $this->fail($validation->getErrors());
        }

        $data = $this->request->getRawInput();
        $this->model->update($id, $data);
        return $this->respond(['message' => 'Data berhasil dihapus']);
    }

    public function delete($id = null) {
        $mahasiswa = $this->model->find($id);
        if (!$mahasiswa) {
            return $this->failNotFound('Data tidak ditemukan');
        }

        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Data berhasil dihapus']);
    }

    public function getData() {
        $mahasiswa = $this->model->findAll();
        return $this->respond($mahasiswa);
    }
}
