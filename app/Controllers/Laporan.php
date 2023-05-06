<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Moora;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;
use App\Models\SubkriteriaModel;

class Laporan extends BaseController {
    var $meta = [
        'url' => 'laporan',
        'title' => 'Laporan',
        'subtitle' => 'Halaman Laporan'
    ];

    public function __construct() {
        $this->pesertaModel = new PesertaModel();
        $this->kriteriaModel = new KriteriaModel();
        $this->subkriteriaModel = new SubkriteriaModel();
    }

    public function index() {
        $data = [
            'title' => $this->meta['title'],
            'dataPeserta' => $this->getPeserta(),
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
            'url'   => $this->meta['url'],
        ];

        // dd($this->getPeserta());

        // dd($data);
        return view('/laporan/index', $data);
    }

    public function getCetak($bantuan) {
        if ($bantuan == 'blt') {
            return $this->cetakBlt();
        } else if ($bantuan == 'penduduk') {
            return $this->cetakPenduduk();
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }



    private function cetakPenduduk() {
        $data = [
            'title' => 'Laporan',
            'dataPeserta' => $this->getPeserta(),
            'dataKriteria' => $this->kriteriaModel->where('jenis_bantuan', $this->jenisBantuan)->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->where('jenis_bantuan', $this->jenisBantuan)->findAll(),
            'url'   => $this->url
        ];

        $pdf = new Dompdf;

        $html = view("/bantuan/laporan/cetakPenduduk", $data);

        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        return $pdf->stream();
    }



    private function getPeserta() {
        $kriteria       = $this->kriteriaModel->findAll();
        $subkriteria    = $this->subkriteriaModel->findAll();
        $peserta        = $this->pesertaModel->findAllPeserta();

        helper('Check');
        $check = checkdata($peserta, $kriteria, $subkriteria, $kelayakan);
        if ($check) return view('/error/index', ['title' => 'Error', 'listError' => $check]);

        $moora = new Moora($peserta, $kriteria, $subkriteria);

        return $moora->getAllPeserta();
    }
}
