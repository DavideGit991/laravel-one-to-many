@extends('layouts.main-layout')

@section('content')

   

    <h2 id="emp">{{$emp->name}} {{$emp->lastname}}</h2>
        @foreach ($emp->tasks as $task)
        <ul id="task">
            <li>
                <h3>
                    Titolo Task: {{$task->title}} 
                </h3>
                <h3> 
                    Priorita task LV [{{$task->priority}}] 
                </h3>
                <h5>
                    Descrizione Task: {{$task->description}}
                </h5>
            </li>
                <ul>
                    @foreach ($task->typologies as $typology)
                        <li id="typology">
                            <h5>Nome tipologia:{{$typology->name}}</h5>
                            <h5>descrizione tipologia:{{$typology->description}}</h5>
                        </li>

                    @endforeach
                </ul>
        </ul>
        @endforeach

@endsection