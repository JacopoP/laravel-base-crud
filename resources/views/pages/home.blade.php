@extends('layouts.main_layout')

@section('content') 
    <a href="{{route('saint.create')}}">CREA UN NUOVO SANTO</a>
    <br>
    @foreach ($saints as $saint)
        <a href="{{route('saint.select', ['id' => $saint -> id])}}">
            {{$saint->name}} {{$saint->miracles_number}}        
        </a>
        &nbsp;
        <a href="{{route('saint.delete', ['id' => $saint -> id])}}">
            X       
        </a>
        <br>
    @endforeach
@endsection