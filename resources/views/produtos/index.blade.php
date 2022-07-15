@extends('templates/layout')

@section('titulo', 'Página de Produtos')

@section('corpo')
    <h1>Index de Produto</h1>

    <hr>
    @if(session('usuario'))
        Olá {{session('usuario.nome')}}.
        <a href="{{ route('usuario.logout') }}">
            Sair
        </a>
    @else
        <a href="{{ route('usuario.index')}}">
            Clique aqui para fazer login
        </a>
    @endif
    <hr>

    <p><a href="{{ route('produto/criar') }}">Criar um produto</a></p>

    <table border="1">
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>

        @foreach($prods as $prod)
        <tr>
            <td>
                <a href="{{route('produto/ver', $prod->id)}}">
                {{ $prod->nome }}
                </a>
            </td>
            <td>{{ $prod->preco }}</td>
            <td>{{ $prod->categoria->nome }}</td>
        </tr>    
        @endforeach
        
    </table>
@endsection