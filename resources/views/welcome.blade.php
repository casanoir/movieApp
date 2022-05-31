@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-row">
            @livewire('movie-card',['movies'=>$movies])
        </div>
    </div>
@endsection