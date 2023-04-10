<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticleModel;

class ArticleController extends BaseController
{
    private $article;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->article = new ArticleModel();
    }

    public function index()
    {
        $data = $this->article->findAll();

        return view('admin/article/index', ['data' => $data]);
    }

    public function show($id = 0)
    {
        $data = $this->article->find($id);

        if (!$data) {
            return throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/article/detail', ['data' => $data]);
    }

    public function create()
    {
        return view('admin/article/create');
    }

    public function insert()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];

        if (!$this->article->save($data)) {
            return redirect()->back()
                ->with('error', $this->article->errors())
                ->with('oldValue', $data);
        }

        return redirect('admin/articles');
    }

    public function edit($id = 0)
    {
        $data = $this->article->find($id);

        if (!$data) {
            return throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/article/edit', ['data' => $data]);
    }

    public function update($id = 0)
    {
        $old = $this->article->find($id);

        if (!$old) {
            return throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];

        if (!$this->article->update($id, $data)) {
            return redirect()->back()
                ->with('error', $this->article->errors())
                ->with('oldValue', $data);
        }

        return redirect('admin/articles');
    }

    public function delete($id = 0)
    {
        $data = $this->article->find($id);

        if (!$data) {
            return throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if ($this->article->delete($id)) {
            return redirect('admin/articles');
        }
    }
}
