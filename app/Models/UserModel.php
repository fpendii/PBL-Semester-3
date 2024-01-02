<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'level', 'email', 'password', 'no_handphone', 'id_user'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_dibuat';
    protected $updatedField  = 'tanggal_dirubah';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'no_handphone' => [
            'rules' => 'numeric',
            'errors' => [
                'numeric' => 'No Handphone hanya boleh angka'
            ]
        ],
        'username' => [
            'rules' => 'is_unique[user.username]',
            'errors' => [
                'is_unique' => 'Username tidak tersedia'
            ]
        ],
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
}
