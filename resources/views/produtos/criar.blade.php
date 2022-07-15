@extends('templates/layout')

@section('titulo', 'Página de Produtos - Criar')

@section('corpo')
    <h1>Produtos - Criar</h1>

    @if ($errors->any())
        <p>Preencha os campos corretamente.</p>

        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('produto/inserir') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <p><input value="{{ old('nome') }}" type="text" name="nome" placeholder="Nome do produto" value=""></p>
        <p><input value="{{ old('preco') }}" type="number" name="preco" placeholder="Preço"></p>

        <p>
            <select name="categoria_id">
            @foreach($categs as $cat)
                <option value="{{$cat->id}}">{{$cat->nome}}</option>
            @endforeach
            </select>
        </p>

        <p>Foto: <input type="file" name="imagem"></p>

        <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição">{{ old('descricao') }}</textarea></p>

        <p><input type="submit" value="Gravar"></p>

    </form>
@endsection