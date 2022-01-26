@extends('layouts.main')

@section('main-content')
<section class="comics-archive container">
    <table class="table">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Title
                </th>
                <th>
                    Price
                </th>
                <th>
                    Series
                </th>
                <th colspan="3">
                    Actions
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($comics as $comic )
                <tr>
                    <td>
                        {{ $comic->id }}
                    </td>
                    <td>
                        {{ $comic->title }}
                    </td>
                    <td>
                        {{ $comic->price }}$
                    </td>
                    <td>
                        {{ $comic->series }}
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">Show details</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection