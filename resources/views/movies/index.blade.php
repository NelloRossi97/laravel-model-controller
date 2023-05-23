@extends('layouts.app')

@section('page_title')
    Lista dei film
@endsection

@section('content')
    <main>
        <h1>Movies List</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <a href="{{ route('movies.show', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
