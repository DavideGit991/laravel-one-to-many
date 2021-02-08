@extends('layouts.main-layout')
@section('content')
    <div >
        <h1 id='task'>Nome della task: 
            {{$task->title}} 
        </h1>
        <div id="emp">
            <h2>Nome dipendente della task: {{$task->employee->name}} {{$task->employee->lastname}}</h2>
        </div>
        <h3>
            Tipologie di Task:
        </h3>

            @foreach ($task->typologies as $type)
                <div id="typology">
                    <h5>Titolo tipo: {{$type ->name}}</h5>
                    <h6>Descrizione{{$type ->description}}</h6>    
                </div>  
            @endforeach 
    </div>      
@endsection
