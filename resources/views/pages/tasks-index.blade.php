@extends('layouts.main-layout')


@section('content')

    <h2>Task aziendali:</h2>

    <a class='create' href="{{route('task-create')}}">
        Inserisci nuova task
    </a>
    <br>
    @foreach ($tasks as $task)
        <a href="{{route('task-show', $task->id)}}">
            {{$task->title}} 
        </a>
        <a href="{{route('task-edit', $task->id )}}">
            EDIT
        </a>
        <a href="{{route('task-delete', $task->id )}}">
            DELETE
        </a>
        <br>
    @endforeach

@endsection