<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'testimonials';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'comment', 'rate'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name' => 'required|alpha_numeric_punct|min_length[2]|max_length[50]',
        'comment' => 'required|alpha_numeric_punct|min_length[8]',
        'rate' => 'required|integer',
    ];
    protected $validationMessages   = [
        'name' => [
            'required' => 'Name is required',
            'alpha_numeric_punct' => 'Only alphanumeric characters are allowed',
            'min_length' => 'Name minimum length 2 characters',
            'max_length' => 'Name maximum length 50 characters',
        ],
        'comment' => [
            'required' => 'Comment is required',
            'alpha_numeric_punct' => 'Only alphanumeric characters are allowed',
            'min_length' => 'Comment minimum length 8 characters',
        ],
        'rate' => [
            'required' => 'Rating is required',
            'integer' => 'Rating must be an integer',
        ],
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
