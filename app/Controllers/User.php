<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class User extends BaseController {
    use ResponseTrait;

    var $meta = [
        'url'   => 'user',
        'title' => 'User',
        'subtitle' => 'Halaman User'
    ];


    public function index() {

        $data = [
            'meta' => $this->meta,
            'title' => 'Data User',
        ];

        return view("user/index", $data);
    }
}
