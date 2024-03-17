<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MoviesController extends Controller
{
    public function __invoke()
    {
        $moovies = Movie::all();

        // dd($moovies);

        return view('movies', compact('moovies'));
    }
}
