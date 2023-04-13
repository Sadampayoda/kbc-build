<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestimonialModel;

class TestimonialController extends BaseController
{
    protected $testimonial;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->testimonial = new TestimonialModel();
    }

    public function index()
    {
        $data = $this->testimonial->find();

        return view('admin/testimonial/index', ['data' => $data]);
    }

    public function show($id = 0)
    {
        $data = $this->testimonial->find($id);

        if (!$data) {
            return throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/testimonial/detail', ['data' => $data]);
    }

    public function create()
    {
        return view('admin/testimonial/create');
    }

    public function insert()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'comment' => $this->request->getPost('comment'),
            'rate' => $this->request->getPost('rate'),
        ];

        if (!$this->testimonial->save($data)) {
            return redirect()->back()
                ->with('error', $this->testimonial->errors())
                ->with('oldValue', $data);
        }

        return redirect('admin/testimonials');
    }

    public function edit($id = 0)
    {
        $data = $this->testimonial->find($id);

        if (!$data) {
            return throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/testimonial/edit', ['data' => $data]);
    }

    public function update($id = 0)
    {
        $old = $this->testimonial->find($id);

        if (!$old) {
            return throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'comment' => $this->request->getPost('comment'),
            'rate' => $this->request->getPost('rate'),
        ];

        if (!$this->testimonial->update($id, $data)) {
            return redirect()->back()
                ->with('error', $this->testimonial->errors())
                ->with('oldValue', $data);
        }

        return redirect('admin/testimonials');
    }

    public function delete($id = 0)
    {
        $data = $this->testimonial->find($id);

        if (!$data) {
            return throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if ($this->testimonial->delete($id)) {
            return redirect('admin/testimonials');
        }
    }
}
