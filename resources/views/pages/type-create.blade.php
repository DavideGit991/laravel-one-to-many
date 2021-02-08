@extends('layouts.main-layout')

@section('content')
    <form action="{{route('typology-store')}}" method="POST">
        @csrf
        @method('POST')

        <label for="name">NOME:</label>
        <input name='name' type="text">
        <br>
        <label for="description">DESCRIZIONE:</label>
        <input name='description' type="text">
        <br>
        
        <label for="tasks[]">SELEZIONA LE TASK ASSOCIATE</label>
        @foreach ($tasks as $task)
            <input name='tasks[]' type="checkbox" value="{{$task->id}}">
                {{$task->title}}
        @endforeach
        <br><br>
        <input type="submit" value="create">
       
    </form>    
@endsection