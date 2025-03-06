@extends('layout.app')
@section('title', 'Contato')
@section('content')
    <div>
        <h1>{{$titulo}} </h1>
        <p>Entre em contato aravés do e-mail: <a href="mailto:{{$email}}">{{$email}}</a></p>
        <br>
        <ul>
            <a href="{{url('/')}}">HOME</a></li>
        </ul>
    </div>
@endsection
