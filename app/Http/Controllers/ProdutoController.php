<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index() {
        //return view('produtos.index');
        return view('produtos/index');
    }

    public function ver() {
        return view('produtos/ver');
    }

    public function criar() {
        return view('produtos/criar');
    }

}
