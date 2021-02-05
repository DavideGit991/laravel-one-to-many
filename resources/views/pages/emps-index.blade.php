@extends('layouts.main-layout')


@section('content')

    <h2>Dipendenti aziendali:</h2>

    @foreach ($emps as $emp)
        <a href="{{route('emp-show', $emp->id)}}">
            <h4>
                {{$emp->name}} 
                {{$emp->lastname}}
            </h4>
        </a>
    @endforeach

@endsection