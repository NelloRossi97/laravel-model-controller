@extends('layouts.app')

@section('content')
    <main>
        <h1>Home Page</h1>
        <a href="{{ route('movies.index') }}">Vai alla lista dei film</a>
    </main>
@endsection