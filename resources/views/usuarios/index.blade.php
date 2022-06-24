@extends('templates/layout')

@section('titulo', 'Login')

@section('corpo')
    <h1>Login</h1>

    @if(session('erro'))
        <p>{{ session('erro') }}</p>
    @endif

    <form action="{{ route('usuario.login') }}" method="post">
        @csrf
        <input type="text" name="email">
        <br>
        <input type="password" name="senha">
        <br>
        <input type="submit" value="Acessar">
    </form>
@endsection