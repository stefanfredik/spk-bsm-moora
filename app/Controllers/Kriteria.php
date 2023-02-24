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

    public function index() {
        $data = [
            'meta' => $this->meta,
            'title' => 'Data Kriteria'
        ];

        return view("kriteria/index", $data);
    }

    public function table() {
        $model = new KriteriaModel();
        $data = [
            'data' => $model->findAll()
        ];


        return $this->respond($data);
    }
}
