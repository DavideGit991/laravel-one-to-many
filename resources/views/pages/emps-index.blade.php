@extends('layouts.main-layout')


@section('content')

    <a class='create' href="{{route('emp-create')}}">
        Crea un nuovo Dipendente
    </a>

    <h2>Dipendenti aziendali:</h2>

    @foreach ($emps as $emp)
        <a href="{{route('emp-show', $emp->id)}}">
            <h4>
                {{$emp->name}} 
                {{$emp->lastname}}
            </h4>
        </a>
        <a href="">
            DELETE
        </a>
        @endforeach
    
@endsection