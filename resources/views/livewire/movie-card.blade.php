<div class="movie">
    <div class="movie-img"></div>
    <div class="text-movie-cont">
        <div class="mr-grid">
            <div class="col1">
                <h1>Interstellar</h1>
            </div>
        </div>
        <div class="mr-grid summary-row">
            <div class="col2">
            <h5>SUMMARY</h5>
            </div>
        </div>
        <div class="mr-grid">
            <div class="col1">
            <p class="movie-description">A group of elderly people are giving interviews about having lived in a climate of crop blight and constant dust reminiscent of The Great
                Depression of the 1930's. The first one seen is an elderly woman stating her father was a farmer, but did not start out that way. </p>
            </div>
        </div>
        @auth
        <div class="mr-grid action-row">
            <div class="col2">
                <div class="action-btn">
                    <h3>WATCH TRAILER</h3>
                </div>
            </div>
            @if($favorite)
                <div class="col2">
                    
                </div>
            @else
                <div class="col2">
                    <div class="action-btn" wire:click="addToFavorite()">
                        <h3>ADD TO FAVORITE</h3>
                    </div>
                </div>
            @endif
        </div>
        @endauth
    </div>
</div>