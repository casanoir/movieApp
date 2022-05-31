<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public $movies;
    public $mostPopularMovies;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {
        $response = Http::acceptJson()->get('https://imdb-api.com/en/API/MostPopularMovies/k_2v2pl6n3');
        $this->movies = $response->json();
        return view('welcome',['movies'=>$this->movies]);
    }
    public function getMoviesCategory(){
        $response = Http::acceptJson()->get('https://imdb-api.com/en/API/MostPopularMovies/k_2v2pl6n3');
        $this->mostPopularMovies = $response->json();
        
        return $this->mostPopularMovies;

    }
    public function favorite()
    {
        return view('favorite');
    }
    
}
