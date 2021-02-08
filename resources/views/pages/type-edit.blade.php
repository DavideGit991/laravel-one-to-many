@extends('layouts.main-layout')

@section('content')
    
    <form  action="{{route('typology-update', $type->id )}}" method="POST">
        @csrf
        @method('POST')

        <label for="name">NOME:</label>
        <input name="name" value="{{$type->name}}" type="text">
        <br>
        <label for="description">Descrizione:</label>
        <input name="description" value="{{$type->description}}" type="text">
        
        <br>
        {{-- scelta delle task  --}}
        <label for="tasks[]">
            Seleziona le typologie da associare alla task
        </label>
        @foreach ($tasks as $task)
            <input  name='tasks[]' 
                    type="checkbox"
                    value="{{$task->id}}"
                    @if ($task->typologies->contains($task->id))
                        checked
                    @endif
            >
            {{$task->title}}
        @endforeach
        <br><br>
        
        <input type="submit" value="UPDATE">
        
    </form>
@endsection