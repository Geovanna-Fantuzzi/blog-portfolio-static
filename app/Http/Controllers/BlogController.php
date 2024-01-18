<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $data = array();

        $data['title'] = 'Aprenda comigo';
        $data['subtitle'] = '';

        return view('blog.list', $data);
    }

    public function list_categorie(String $categorie)
    {
        $data = array();

        $data['title'] = 'Aprenda comigo';
        $data['subtitle'] = ' - ' . $categorie;

        $data['categorie'] = $categorie;

        return view('blog.list_categorie', $data);
    }

    public function post_1()
    {
        $data = array();

        $data['title'] = 'Aprenda comigo';
        $data['subtitle'] = ' - Laravel 10';


        return view('blog.post_1', $data);
    }
}
