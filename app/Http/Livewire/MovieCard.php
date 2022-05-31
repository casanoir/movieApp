<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MovieCard extends Component
{
    public $favorite=false;
    public $movies;
 
    public function mount($movies){
        $this->movies=$movies;
    }
    public function render()
    {
        return view('livewire.movie-card');
    }
    public function addToFavorite(){
        $this->favorite=true;
        $refresh;
    }
}
