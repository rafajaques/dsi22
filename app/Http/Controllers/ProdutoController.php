<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index() {
        $produtos = Produto::with('categoria')->get();
        //return $produtos;
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
        $categorias = Categoria::all();
        return view('produtos/criar', [
            'categs' => $categorias,
        ]);
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
            'categoria_id' => 'required',
            'descricao' => 'required'
        ]);
        
        $imgCaminho = $form->file('imagem')->store('', 'imagens');

        $dados['img'] = $imgCaminho;

        Produto::create($dados);

        return redirect()->route('produto');
    }

    
    public function editar(Produto $prod)
    {
        return view('produtos/editar', ['prod' => $prod]);
    }

    
    public function editarGravar(Request $form, Produto $prod)
    {
        $dados = $form->validate([
            'nome' => 'required|max:255',
            'preco' => 'required',
            'descricao' => 'required'
        ]);

        $prod->fill($dados);
        $prod->save();
        return redirect()->route('produto');
    }

}
