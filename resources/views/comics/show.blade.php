@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap">
        <div class="card w-100" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <h5 class="card-title">Price: {{ $comic->price }}</h5>
                <h5 class="card-title">Sale date: {{ $comic->sale_date }}</h5>
                <h5 class="card-title">Type: {{ $comic->type }}</h5>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Go back</a>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
@endsection
