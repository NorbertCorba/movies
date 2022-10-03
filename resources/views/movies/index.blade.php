@extends('layouts.master')

@section('title', 'Movies')

@section('content')


@foreach($movies as $movie)

<h1> 
    <a href="/singlemovie">{{ $movie->Title}}</a>
</h1>   

    <h2> 
        {{ $movie->Storyline }}
    </h2>   

@endforeach
    
@endsection