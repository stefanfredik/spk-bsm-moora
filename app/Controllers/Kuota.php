<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KuotaModel;
use CodeIgniter\API\ResponseTrait;

class Kuota extends BaseController
{
    use ResponseTrait;

    var $meta = [
        'url' => 'kuota',
        'title' => 'Kuota dan Periode',
        'subtitle' => 'Halaman Kuota dan Periode'
    ];


    public function __construct()
    {
        $this->kuotaModel = new KuotaModel();
    }

    public function index()
    {
        $data = [
            'meta' => $this->meta,
            'title' => 'Data Kuota dan Periode'
        ];

        return view("kuota/index", $data);
    }

    public function table()
    {
        $data = [
            'title' => 'Data Kuota dan Periode',
            'url'   => $this->meta['url'],
            'dataKuota' => $this->kuotaModel->findAll()
        ];

        return view('/kuota/table', $data);
    }
}
