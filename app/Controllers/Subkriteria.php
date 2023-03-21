<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Subkriteria extends BaseController {
    use ResponseTrait;

    var $meta = [
        'url' => 'subkriteria',
        'title' => 'Sub Kriteria',
        'subtitle' => 'Halaman Sub Kriteria'
    ];



    public function index() {
        $data = [
            'meta' => $this->meta,
            'title' => 'Data Sub Kriteria'
        ];

        return view("subkriteria/index", $data);
    }

    public function table() {
        $data = [
            'title' => 'Data Kriteria',
            'url'   => $this->meta['url'],
            'dataKriteria' => $this->kriteriaModel->orderBy('keterangan', 'ASC')->findAll(),
        ];

        return view('/kriteria/table', $data);
    }
}
