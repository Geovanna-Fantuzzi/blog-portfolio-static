<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $data = array();

        $data['title'] = 'Portfolio Pessoal';
        $data['subtitle'] = 'Projetos';


        return view('portfolio.list', $data);
    }

    public function project_advoce()
    {
        $data = array();

        $data['title'] = 'ADVocê';
        $data['subtitle'] = ' - Portfolio Pessoal';


        return view('portfolio.advoce', $data);
    }

    public function project_protsa()
    {
        $data = array();

        $data['title'] = 'ProTSA';
        $data['subtitle'] = ' - Portfolio Pessoal';


        return view('portfolio.protsa', $data);
    }

    public function project_blog()
    {
        $data = array();

        $data['title'] = 'Meu blog';
        $data['subtitle'] = ' - Portfolio Pessoal';


        return view('portfolio.my_blog', $data);
    }
}
