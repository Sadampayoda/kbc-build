<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'articles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'content'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'title'     => 'required|alpha_numeric_punct|min_length[8]|max_length[50]',
        'content' => 'required|min_length[10]',
    ];
    protected $validationMessages   = [
        'title' => [
            'required' => 'Title is required',
            'alpha_numeric_punct' => 'Only alphanumeric characters are allowed.',
            'min_length' => 'Title minimal 8 characters',
            'max_size' => 'Title maximal 50 characters',
        ],
        'content' => [
            'required' => 'Detail content is required',
            // 'alpha_numeric_punct' => 'Only alphanumeric characters are allowed.',
            'min_length' => 'Detail content minimal 10 characters',
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
