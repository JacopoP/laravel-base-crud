@extends('layouts.main_layout')

@section('content')
    <form method="POST" action="{{route('saint.store')}}">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">
        <label for="birthplace">Luogo di nascita</label>
        <input type="text" name="birthplace">
        <label for="santification_date">Data di Santificazione</label>
        <input type="date" name="santification_date">
        <label for="miracles_number">Numero di miracoli</label>
        <input type="number" name="miracles_number">
        <input type="submit" value="CREA NUOVO SANTO">
    </form>
@endsection