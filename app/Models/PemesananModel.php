<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table            = 'pemesanan';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_pemesan', 'tanggal_keberangkatan', 'tujuan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $validationRules      = [
        'nama_pemesan' => 'required|min_length[50]',
        'tanggal_keberangkatan'  => 'required|min_length[10]',
        'tujuan'  => 'required|min_length[10]'
    ];

    public function getData()
    {
        $PemesananModel = new PemesananModel(); // Gunakan model yang benar
        return $PemesananModel->findAll();
    }

    public function getRule()
    {
        return $this->validationRules;        
    }    

    
        
}
