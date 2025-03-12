@extends('layout.app')
@section('title', 'Contato')
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
        <ul>
            <a href="{{url('/')}}">HOME</a></li>
        </ul>
    </div>
    <did>
        Aplicação executada em {{$script}} as {{$data}}.
    </did>
@endsection
