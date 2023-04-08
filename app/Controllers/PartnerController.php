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
}
