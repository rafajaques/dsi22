@extends('templates/layout')

@section('titulo', 'Página de Produtos - Ver')

@section('corpo')
    <h1>Produtos - Ver</h1>

    <h2>{{$produto->nome}}</h2>

    <h3>R$ {{ number_format($produto->preco, 2) }}</h3>

    {{-- Outra forma de mostrar as informações na tela --}}
    {{-- Tanto ->preco quanto ['preco'] --}}
    <p><strong>Descrição:</strong> {{ $produto['descricao'] }}</p>
@endsection