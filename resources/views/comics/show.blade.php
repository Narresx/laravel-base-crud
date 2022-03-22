@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap">
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Go back</a>
            </div>
        </div>
    </div>
@endsection
