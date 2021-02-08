@extends('layouts.main-layout')

@section('content')
    
    <div class="create">

        <form action="{{route('emp-store')}}" method="POST">
            @csrf
            @method('post')

            <label for="name">Nome</label>
            <input name="name" type="text" placeholder="inserisci nome">

            <br>

            <label for="lastname">Cognome</label>
            <input name="lastname" type="text" placeholder="inserisci cognomenome">

            <br>

            <label for="date_of_birth">Data di nascita(aaaa/mm/gg)</label>
            <input name="date_of_birth" type="text" placeholder="inserisci data">

            <br>

            <input type="submit" value='create'>

        </form>






    </div>





@endsection