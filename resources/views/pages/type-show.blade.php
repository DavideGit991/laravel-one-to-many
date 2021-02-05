@extends('layouts.main-layout')

@section('content')
   <h2 id="typology"> nome della tipologia: {{$type->name}} </h2>
   <h3 id="task">Task associate alla tipologia:</h3>
    <ul >
        @foreach ($type->tasks as $task)
            <li id="task">
                <h4>{{$task->title}}</h4>
                <h5>{{$task->description}}</h5>
            </li>
            <li id="emp">
                Lavoratore associato alla task: 
                {{$task->employee->name}} 
                {{$task->employee->lastname}}
            </li>
        @endforeach
    </ul>
@endsection