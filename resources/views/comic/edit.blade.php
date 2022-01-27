@extends('layouts.main')

@section('main-content')
<section class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title" class="mb-2">Title</label>
        <input class="form-control mb-3" type="text" id="title" name="title" value="{{ $comic->title }}">
        
        <label for="description" class="mb-2">Description</label>
        <textarea class="form-control mb-3" id="description" name="description" cols="6">{{ $comic->description }}</textarea>

        <label for="thumb" class="mb-2">Cover</label>
        <input class="form-control mb-3" type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}">

        <label for="price" class="mb-2">Price</label>
        <input class="form-control mb-3" type="text" id="price" name="price" value="{{ $comic->price }}">

        <label for="series" class="mb-2">Series</label>
        <input class="form-control mb-3" type="text" id="series" name="series" value="{{ $comic->series }}">

        <label for="date" class="mb-2">Date</label>
        <input class="form-control mb-3" type="text" id="date" name="sale_date" value="{{ $comic->sale_date }}">

        <label for="type" class="mb-2">Type</label>
        <input class="form-control mb-3" type="text" id="type" name="type" value="{{ $comic->type }}">

        <button type="submit" class="btn btn-success">
            Update
        </button>
    </form>
</section>
@endsection