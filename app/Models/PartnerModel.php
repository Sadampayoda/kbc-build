<?php

namespace App\Models;

use CodeIgniter\Model;

class PartnerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'partners';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'picture'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name'     => 'required|alpha_numeric_punct|min_length[2]|max_length[100]',
        'picture'  => 'uploaded[picture]|is_image[picture]|max_size[picture, 1024]|mime_in[picture,image/jpg,image/jpeg,image/png]'
    ];
    protected $validationMessages   = [
        'name' => [
            'required' => 'Partner name is required',
            'alpha_numeric_punct' => 'Only alphanumeric characters are allowed.',
            'min_length' => 'Partner name must be at least 2 characters',
            'max_size' => 'Partner name maximal 100 characters',
        ],
        'picture' => [
            'uploaded' => 'Image is required to be uploaded',
            'is_image' => 'Invalid image format',
            'max_size' => 'Max image size is 1MB',
            'mime_in' => 'Image must be jpg, jpeg, png',
        ]
    ];
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
