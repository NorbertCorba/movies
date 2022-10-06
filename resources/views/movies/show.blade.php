@extends('layouts.master')

@section('content')

<div>       
    <h1>Title:</h1> 
    <h2>{{ $movie->Title }}</h2>
    <h1> Genre:</h1> 
    <h2>{{ $movie->Genre }}</h2> 
    <h1> Director:</h1> 
    <h2>{{ $movie->Director }} 
    <h1>Year:</h1> 
    <h2>{{ $movie->Year }}</h2> 
    <h1> Storyline:</h1> 
    <h2>{{ $movie->Storyline }}</h2> <br>
</div>

<div>
    <h4>Comments:</h4>

<ul>
        @foreach($movie->comments as $comment)
            <li>
                {{ $comment->content }}
                Created at: {{ $comment->created_at }}
            </li>
        @endforeach
    </ul>        
</div>

@endsection