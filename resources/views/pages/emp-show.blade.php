@extends('layouts.main-layout')

@section('content')
    <h2>{{$emp->name}} {{$emp->lastname}}</h2>
        @foreach ($emp->tasks as $task)
            {{-- @php
                dd($emp->tasks)
            @endphp --}}
            <h3>Titolo Task: {{$task->title}}  </h3>
               <h3> Priorita task LV [{{$task->priority}}] </h3>
            <h5>Descrizione Task: {{$task->description}}</h5>

        @endforeach

@endsection