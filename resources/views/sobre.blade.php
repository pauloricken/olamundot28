@extends('layout.app')
@section('title', 'Olá Mundo::Sobre')
@section('content')
    <div>
        <img src="{{asset('img/laravel.png')}}" alt="Logo Laravel" class="w-20 h-20">
        <h1>Sobre a aplicação {{$framework}} Olá Mundo</h1>
        <p>
            Esse projeto olá mundo ilustra a estrutura {{$metodologia}} de um projeto em {{$framework}}.
        </p>
    </div>
@endsection
