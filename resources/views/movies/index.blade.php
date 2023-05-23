@extends('layouts.app')

@section('content')
    <main>
        <h1>Movies List</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie->title }}</li>
            @endforeach
        </ul>
    </main>
@endsection
