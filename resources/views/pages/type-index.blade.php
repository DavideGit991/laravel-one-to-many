@extends('layouts.main-layout')


@section('content')

    <h2>Tipologie task aziendali:</h2>

    @foreach ($type as $item)
        <a href="{{route('type-show', $item->id)}}">
            <h4>
                    {{$item->name}} 
                
            </h4>
        </a>
    @endforeach

@endsection