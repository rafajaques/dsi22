@extends('templates/layout')

@section('titulo', 'Página de Produtos')

@section('corpo')
    <h1>Index de Produto</h1>

    <p><a href="{{ route('produto/criar') }}">Criar um produto</a></p>
@endsection