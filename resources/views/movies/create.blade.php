@extends('layouts.master')

@section('title', 'Create new movie')

@section('content')

<br>

    <form method="POST" action="/create">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="Title" class="form-control"/>
        </div>
        @error('Title')
            @include('partials.error')
        @enderror

        <br>

        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="text" name="Genre" class="form-control"/>
        </div>
        @error('Genre')
            @include('partials.error')
        @enderror

        <br>

        <div class="mb-3">
            <label class="form-label">Director</label>
            <input type="text" name="Director" class="form-control"/>
        </div>

        @error('Director')
            @include('partials.error')
        @enderror

        <br>

        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="text" name="Year" class="form-control"/>
        </div>

        @error('Year')
            @include('partials.error')
        @enderror

        <br>

        <div class="mb-3">
            <label class="form-label">Storyline</label>
            <input type="text" name="Storyline" class="form-control"/>
        </div>

        @error('Storyline')
            @include('partials.error')
        @enderror

        <br>

        <button type="submit" class="btn btn-primary">Create movie</button>
    </form>
@endsection
