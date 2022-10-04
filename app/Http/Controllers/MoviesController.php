<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;


class MoviesController extends Controller
{
    public function index() {

        $movies = Movies::all();

        return view('movies.index', compact('movies'));
    }

        public function show($id) {

        $movie = Movies::find($id);

        return view('movies.show', compact('movie'));

    }
}
