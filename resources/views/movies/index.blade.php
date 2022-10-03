@foreach($movies as $movie)

<h1> 
    <a href="/singlemovie">{{ $movie->Title}}</a></h1>   

    <h2> 
        {{ $movie->Storyline }}
    </h2>   
 <h1>   
   

</h1>

@endforeach