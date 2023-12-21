<?php

namespace App\Controllers;

use App\Models\PemesananModel;

class Pemesanan extends BaseController
{
    public function index()
    {
        $pemesanan_model = new PemesananModel();
        $all_data_pemesanan = $pemesanan_model->findAll();

        return view('view_pemesanan', ['all_data_pemesanan' => $all_data_pemesanan]);
    }

    public function add_data_pemesanan(){
        return view  ('add_data_pemesanan');
    }
     
    public function proses_data_pemesanan(){
        $pemesanan_model = new PemesananModel();
        $pemesanan_model->insert($this->request->getPost());
        return redirect()->to(base_url('view_pemesanan'));
    }
}