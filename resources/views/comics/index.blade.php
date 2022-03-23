@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap">
        @foreach ($comics as $comic)
            <div class="card m-2" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
