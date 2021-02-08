@extends('layouts.main-layout')

@section('content')
    
    <form method="POST" action="{{route('task-update', $task->id )}}">
        @csrf
        @method('POST')

        <label for="title"></label>
        <input name="title" value="{{$task->title}}" type="text">
        <br>
        <label for="description"></label>
        <input name="description" value="{{$task->description}}" type="text">
        <br>
        <label for="priority"></label>
        <input name="priority" value="{{$task->priority}}" type="text">
        <br>
        
        <label for="employee_id">Lavoratore associato</label>
        {{-- update del lavoratore con la selected che seleziona il 
            lavoratore gia accostato alla task --}}
        <select name="employee_id" >
                
            @foreach ($emps as $emp)
                <option value="{{$emp->id}}"
                    @if ($task->employee->id == $emp->id )
                        selected
                    @endif
                >
                {{$emp->name}}
                {{$emp->lastname}}
                </option>
            @endforeach

        </select>
        <br>
        {{-- scelta delle tipologie  --}}
        <label for="typologies[]">
            Seleziona le typologie da associare alla task
        </label>
        @foreach ($types as $type)
            <input  name='typologies[]' 
                    type="checkbox"
                    value="{{$type->id}}"
                    @if ($task->typologies->contains($type->id))
                        checked
                    @endif
            >
            {{$type->name}}
        @endforeach
        <br><br>
        
        <input type="submit" value="UPDATE">
        
    </form>
@endsection