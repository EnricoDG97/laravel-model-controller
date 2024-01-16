<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $movies = Movie::all();
        // $movies = Movie::where('id', 4)->first();
        // dd($movies);
        return view('home', compact('movies'));
    }
}
