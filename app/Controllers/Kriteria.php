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

    public function table() {
        $data = [
            'title' => 'Data Kriteria',
            'kriteria' => $this->kriteriaModel->orderBy('keterangan', 'ASC')->findAll(),
            'meta' => $this->meta,
        ];

        return view('/kriteria/table', $data);
    }

    public function tambah() {
        $data = [
            'title' => 'Tambah Data Kriteria',
            'url'   => $this->meta['urla']
        ];

        return view('/kriteria/tambah', $data);
    }

    public function delete($id) {
        $this->kriteriaModel->delete($id);

        // $column = "k_" . $id;
        // $this->forge->dropColumn('peserta', $column);

        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }
}
