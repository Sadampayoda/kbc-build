<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PartnerModel;

class PartnerController extends BaseController
{
    protected $partner;
    protected $helpers = ['form', 'filesystem'];

    public function __construct()
    {
        $this->partner = new PartnerModel();
    }

    public function index()
    {
        $data = $this->partner->findAll();

        return view('admin/partner/index', [
            'data' => $data
        ]);
    }

    public function show($id = 0)
    {
        $data = $this->partner->find($id);

        if (!$data) {
            return throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['path'] = 'uploads/assets/partner/';

        return view('admin/partner/detail', ['data' => $data]);
    }

    public function create()
    {
        return view('admin/partner/create');
    }
}
