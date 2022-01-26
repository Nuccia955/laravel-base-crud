@extends('layouts.main')

@section('main-content')
<section class="comic-details container">
    <h1 class="mt-5 mb-2">
        {{ $comic->title }}
    </h1>

    <div class="badges mb-2">
        <span class="badge bg-primary">
            {{ $comic->series }}
        </span>
        <span class="badge bg-warning">
            {{ $comic->type }}
        </span>
    </div>

    <div class="details d-flex w-100 justify-content-between mb-5">
        <span>
            Sale Date:
            {{ $comic->sale_date }}
        </span>
        <span>
            Price:
            {{ $comic->price }}$
        </span>
    </div>

    <h2>Description</h2>
    <p>{!! $comic->description !!}</p>

</section>
@endsection