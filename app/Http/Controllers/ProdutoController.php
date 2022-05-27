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

    public function ver(Produto $prod) {
        // $produto = Produto::find($id);
        return view('produtos/ver', [
            'produto' => $prod,
        ]);
    }

    public function criar() {
        return view('produtos/criar');
    }

    // public function inserir(Request $form) {
    //     $dados = $form->validate([
    //         'nome' => 'required',
    //         'preco' => 'required',
    //         'descricao' => 'required'
    //     ]);

    //     $produto = new Produto();

    //     $produto->nome = $form->nome;
    //     $produto->preco = $form->preco;
    //     $produto->descricao = $form->descricao;

    //     $produto->save();

    //     return redirect()->route('produto');
    // }

    public function inserir(Request $form) {
        $dados = $form->validate([
            'nome' => 'required|max:255',
            'preco' => 'required',
            'descricao' => 'required'
        ]);

        Produto::create($dados);

        return redirect()->route('produto');
    }

}
