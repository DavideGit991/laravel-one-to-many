@extends('layouts.main-layout')


@section('content')

    <h2>Tipologie task aziendali:</h2>
    <h5>
        <a href="{{route('typology-create')}}">
            creazione di una nuova tipologia
        </a>
    </h5>
    @foreach ($type as $item)
        <a href="{{route('type-show', $item->id)}}">
            <h4>
                {{$item->name}} 
            </h4>
        </a>
        <a href="{{route('typology-edit',$item->id)}}">EDIT</a>
    @endforeach

@endsection