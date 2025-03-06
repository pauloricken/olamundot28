@extends('layout.app')
@section('title', 'Home')
@section('content')
    <div>
        <h1>Bem-vindo a aplicação Laravel Olá Mundo</h1>
        <p>
            Essa aplicação trás de forma breve a estrutura de um projeto Laravel, com rotas, views e controllers.
        </p>
        <br>
        <ul>
            <li><a href="{{url('/contato')}}">CONTATO</a></li>
        </ul>
    </div>
@endsection
