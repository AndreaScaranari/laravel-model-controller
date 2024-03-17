@extends('layouts.main')

@section('title', 'Movies')

@section('main-content')
    <div class="text-center pb-3">
        <h1>Ecco i film sul nostro database</h1>
        <h3>Recuperati con Models e inviati alle View con i controller</h3>
    </div>

    <div class="row row-cols-5 row-gap-3">
        @foreach ($moovies as $moovie)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $moovie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $moovie->date }}</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nisi
                            architecto, quia placeat facere nesciunt adipisci, rerum ullam repellendus similique minima
                            provident minus reprehenderit blanditiis ipsa officiis saepe, cumque sed.</p>
                        <div class="d-flex justify-content-between">
                            <p>{{ $moovie->nationality }}</p>
                            <p>{{ $moovie->vote }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
