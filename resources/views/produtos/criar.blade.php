@extends('templates/layout')

@section('titulo', 'Página de Produtos - Criar')

@section('corpo')
    <h1>Produtos - Criar</h1>

    <form action="{{ route('produto/inserir') }}" method="post">
        @csrf
        
        <p><input type="text" name="nome" placeholder="Nome do produto"></p>
        <p><input type="number" name="preco" placeholder="Preço"></p>

        <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição"></textarea></p>

        <p><input type="submit" value="Gravar"></p>

    </form>
@endsection