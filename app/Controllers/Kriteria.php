<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use CodeIgniter\API\ResponseTrait;

class Kriteria extends BaseController {
    use ResponseTrait;

    var $meta = [
        'url' => 'kriteria',
        'title' => 'Kriteria',
        'subtitle' => 'Halaman Kriteria'
    ];


    public function __construct() {
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index() {
        $data = [
            'meta' => $this->meta,
            'title' => 'Data Kriteria'
        ];

        return view("kriteria/index", $data);
    }

    public function getItems() {
        $items = $this->kriteriaModel->findAll();

        return $this->respond(['data' => $items]);
    }

    public function getItemById() {
        $id = $this->request->getVar('id');
        $item = $this->kriteriaModel->find($id);
        return $this->respond(['data' => $item]);
    }

    public function createItem() {
        $data = $this->request->getPost();
        $this->kriteriaModel->save($data);

        return $this->respond(['success' => true]);
    }

    public function updateItem() {
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price')
        ];

        $this->kriteriaModel->updateItem($id, $data);

        return $this->respond(['success' => true]);
    }

    public function deleteItem() {
        $id = $this->request->getVar('id');
        $this->kriteriaModel->deleteItem($id);
        return $this->respond(['success' => true]);
    }
}
