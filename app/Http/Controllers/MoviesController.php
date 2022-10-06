<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Models\Comment;



class MoviesController extends Controller
{
    public function index() {

        $movies = Movies::all();

        return view('movies.index', compact('movies'));
    }

        public function show($id) {

        $movie = Movies::with('comments')->find($id);

        return view('movies.show', compact('movie'));

    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(CreateMovieRequest $request)
    {
        // $movie = new Movies();

        $validated = $request->validated();

        Movies::create([
            'Title' => $validated['Title'],
            'Genre' => $validated['Genre'],
            'Director' => $validated['Director'],
            'Year' => $validated['Year'],
            'Storyline' => $validated['Storyline']
        ]);

        // $movie->save();
        return redirect('/movies');
    }

}
