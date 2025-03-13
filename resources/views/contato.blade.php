@extends('layout.app')
@section('title', 'Olá Mundo::Contato')
@section('content')
    <div>
        <h1>{{$titulo}} </h1>
        <p>Entre em contato através dos e-mails:
        <br>
        @foreach($emails as $email)
            <a href="mailto:{{$email}}"></a>{{$email}}
        <br>
        @endforeach
        </p>
        <br>
        <div class="mt-4 text-xs text-gray-400">
            Aplicação executada em {{$script}} as {{$data}}.
        </div>
        </div>
@endsection
