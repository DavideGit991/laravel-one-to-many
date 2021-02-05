@extends('layouts.main-layout')


@section('content')

    <h2>Task aziendali:</h2>

    @foreach ($tasks as $task)
        <a href="{{route('task-show', $task->id)}}">
            <h4>
                    {{$task->title}} 
                
            </h4>
        </a>
    @endforeach

@endsection