@extends('layouts.app')

@section('page_title')
    Lista dei film
@endsection

@section('content')
    <main>
        <h1>Movies List</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mycard py-3 rounded-4">
                    <div class="img-container">
                        <img src="{{ $movie->image }}" alt="{{ $movie->title }}" class="w-100 h-75">
                    </div>
                    <div class="title-container text-center mt-3 fs-3">
                        <a href="{{ route('movies.show', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection

<style lang="scss" scoped>
    .mycard {
        width: 200px;
        height: 400px;
        transition: .8s;

        &:hover {
            background-color: darkgrey;
            cursor: pointer;
        }
    }
</style>
