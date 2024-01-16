@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="lightning">
            <div class="noisy text-center">
                MOVIES
            </div>
        </div>
        <div class="row row-cols-3 g-5 p-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="d-flex h-100">
                        <div class="card">
                            <img src="{{ $movie->image }}" class="card-img-top poster" alt="{{ $movie->title }}">
                            <div class="card-body">
                                <h5 class="card-title text-white">{{ $movie->title }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
