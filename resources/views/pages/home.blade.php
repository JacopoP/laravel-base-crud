@extends('layouts.main_layout')

@section('content')    
    @foreach ($saints as $saint)
        <a href="/saint/{{$saint->id}}">
            <div>{{$saint->name}} {{$saint->miracles_number}}</div>        
        </a>
    @endforeach
@endsection