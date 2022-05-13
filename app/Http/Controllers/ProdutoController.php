<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index() {
        //return view('produtos.index');
        $produtos = Produto::all();
        return view('produtos/index', [
            'prods' => $produtos,
            ]);
    }

    public function ver() {
        return view('produtos/ver');
    }

    public function criar() {
        return view('produtos/criar');
    }

}
