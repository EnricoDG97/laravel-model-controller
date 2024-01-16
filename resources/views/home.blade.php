@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5"> 
        <div class="row row-cols-5 gap-3">
            @foreach ($movies as $movie)
            <div class="col card bg-dark text-light" style="width: 15rem; max-height: 45rem;">
                <img src="{{url($movie->image)}}" class="card-img-top" alt="">
                <hr>
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{ $movie->title }}</h2>
                        <h3>{{ $movie->original_title }}</h3>
                        <hr>
                    </div>
                    <div class="card-text">
                        {{  $movie->nationality }} <br>
                        {{  $movie->date }} <br>
                        {{  $movie->vote }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </.>
@endsection