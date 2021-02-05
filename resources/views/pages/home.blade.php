@extends('layouts.main-layout')

@section('content')
    <h1>
        Questa e' la HOME dove vuoi andare:
    </h1>
    <ul>
        <li>
            <a href="{{route('emp-index')}}">Employee</a>
        </li>
        <li>
            <a href="{{route('task-index')}}">Tasks</a>
        </li>
        <li>
            <a href="{{route('type-index')}}">Typologies</a>
        </li>
    </ul>
@endsection