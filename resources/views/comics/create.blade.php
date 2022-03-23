@extends('layouts.main')
@section('content')
    <div class="container text-center">
        <h2>Add a comic</h2>
    </div>
    @if ($errors->any())
        <div class="container alert alert-primary">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="container" action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" rows="5" id="description" name="description" type="text" class="form-control"
                id="description" value="{{ old('description') }}"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Picture</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="" value="{{ old('thumb') }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" placeholder="2022-03-22" id="sale_date" name="sale_date"
                value="{{ old('sale_date') }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Go back</a>
    </form>
@endsection
