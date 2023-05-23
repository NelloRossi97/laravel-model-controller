@extends('layouts.app')

@section('content')
    <main>
        <h1>Movies List</h1>
        <h2>{{ $movie->title }}</h2>
        <p>Titolo originale: {{ $movie->original_title }}</p>
        <p>Nazione: {{ $movie->nationality }}</p>
        <p>Data di pubblicazione: {{ $movie->date }}</p>
        <p>Voto: {{ $movie->vote }}</p>
        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
    </main>
@endsection
