<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public $movies;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

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
        
}
