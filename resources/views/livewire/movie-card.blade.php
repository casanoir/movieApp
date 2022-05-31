@foreach ($movies['items'] as $movie)
<div class="movie">
  
  <div class="movie-img" style="background-image: url({{$movie["image"]}});"></div>
    <div class="text-movie-cont">
        <div class="mr-grid">
            <div class="col1">
                <h1>{{$movie["title"]}}</h1>
            </div>
        </div>
        <div class="mr-grid summary-row">
            <div class="col2">
            <h5>CREW</h5>
            </div>
        </div>
        <div class="mr-grid">
            <div class="col1">
            <p class="movie-description">{{$movie["crew"]}} {{$movie["id"]}}</p>
            </div>
        </div>
        @auth
        <div class="mr-grid action-row">
            @if($favorite)
                <div class="col2">
                </div>
            @else
                <div class="col2">
                    <button class="action-btn" wire:click="addToFavorite({{$movie["id"]}})">
                        <h3>ADD TO FAVORITE</h3>
                    </button>
                </div>
            @endif
        </div>
        @endauth
    </div>
</div>
@endforeach