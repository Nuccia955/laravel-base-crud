@extends('layouts.main')

@section('main-content')
<section class="container">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title" class="mb-2">Title</label>
        <input class="form-control mb-3" type="text" id="title" name="title">
        
        <label for="description" class="mb-2">Description</label>
        <textarea class="form-control mb-3" id="description" name="description" cols="6"></textarea>

        <label for="price" class="mb-2">Price</label>
        <input class="form-control mb-3" type="text" id="price" name="price" placeholder="00.00">

        <label for="series" class="mb-2">Series</label>
        <input class="form-control mb-3" type="text" id="series" name="series">

        <label for="date" class="mb-2">Date</label>
        <input class="form-control mb-3" type="text" id="date" name="sale_date" placeholder="YYYY-MM-DD">

        <label for="type" class="mb-2">Type</label>
        <input class="form-control mb-3" type="text" id="type" name="type">

        <button type="submit" class="btn btn-success">
            Add
        </button>
    </form>
</section>
@endsection