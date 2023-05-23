<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
    public function homepage()
    {
        $movies = Movie::Where('id', '>', 0)
            ->orderBy('vote', 'desc')
            ->limit(4)
            ->get();
        return view('home', compact('movies'));
    }
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }
}