@extends('layouts.main_layout')

@section('content')
    <a href="/">
        <h1>{{$saint->name}}</h1>
        <h3>from {{$saint->birthplace}}</h3>
        <h2>{{$saint->santificatio_date}} {{$saint->miracles_number}}</h2>
    </a>
@endsection