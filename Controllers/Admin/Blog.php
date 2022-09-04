<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'CodeIgniter 4 Blog',
            'title' => 'This is a Blog Page',
        ];

        $posts = [
            'Title 1',
            'Title 2',
            'Title 3'
        ];

        $data['posts'] = $posts;

        echo view('templates/header', $data);
        echo view('blog');
        echo view('templates/footer');
    }

    public function post()
    {
        $data = [
            'meta_title' => 'CodeIgniter 4 Post',
            'title' => 'This is a Awesome Page',
        ];
        echo view('templates/header', $data);
        echo view('single_post');
        echo view('templates/footer');
    }
    public function createNew()
    {
        return view('blog_form');
    }
    public function saveBlog()
    {
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';
    }
}
