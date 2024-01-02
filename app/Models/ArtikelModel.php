<?php
namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'artikel';
    protected $primaryKey       = 'id_artikel';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul', 'isi_artikel', 'gambar'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_dibuat';
    protected $updatedField  = 'tanggal_diperbarui';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'judul' =>[
            'rules' => 'required',
            'errors' => [
                'required' => 'Judul wajib diisi'
            ]
        ],
        'isi_artikel' =>[
            'rules' => 'required',
            'errors' => [
                'required' => 'Isi artikel wajib diisi'
            ]
        ],
        // 'gambar' => [
        //     'rules' => 'max_size[gambar,2048]|mime_in[gambar,image/png,image/jpg,image/jpeg]|is_image[gambar]',
        //     'errors' => [
        //         'max_size' => 'Ukuran gambar minimal 2mb',
        //         'mime_in' => 'Yang anda pilih bukan gambar',
        //         'is_image' => 'Yang anda pilih bukan gambar'
        //     ]
        // ]
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getArtikel($id = false)
    {

        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id_artikel' => $id,])->first();
    }

    public function getRandomArtikel()
    {
        $query =  $this->db->table('artikel')
            ->orderBy('RAND()')
            ->limit(1)
            ->get();

        return $query->getRow();
    }

    public function getArtikelWithUser(){
        return $this->join('user', 'user.id_user = artikel.id_user')
                    ->select('artikel.id_artikel, artikel.isi_artikel')
                    ->findAll();
    }
}
