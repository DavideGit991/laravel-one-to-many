@extends('layouts.main-layout')

@section('content')
    
    <div class="create">
        
        <form action="{{route('task-store')}}" method="POST">
            @csrf
            @method('post')

            <label for="title">title</label>
            <input name="title" type="text" placeholder="inserisci title">

            <br>

            <label for="description">description</label>
            <input name="description" type="text" placeholder="inserisci description">

            <br>

            <label for="priority">priority</label>
            <input name="priority" type="text" placeholder="inserisci priority">

            <br>
            
            <label for="employee_id">Seleziona il laoratore per la task</label>
            <select name="employee_id" >
               
                @foreach ($emps as $emp)
                    <option value="{{$emp->id}}">{{$emp->name}} {{$emp->lastname}}</option>
                @endforeach
            </select>
            
            <br>
            <label for="typologies[]">Seleziona la tipologia per la task</label>
            <br>
            @foreach ($type as $item)
                <input  name="typologies[]" type="checkbox" 
                        value="{{$item->id}}">
                        {{$item->name}}     
            @endforeach
            
            <br><br>
        
            <input type="submit" value='create'>

        </form>






    </div>