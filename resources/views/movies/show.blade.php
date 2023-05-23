@extends('layouts.app')

@section('content')
    <main>
        <section class="d-flex justify-content-between px-5 mt-5">
            <div class="ps-5">
                <a href="{{ route('movies.index') }}" class="fw-bold"><i class="fa-solid fa-arrow-left me-3"></i>Torna alla
                    lista
                    dei film</a>
                <h1 class="mt-5">{{ $movie->title }}</h1>
                <p>Titolo originale: {{ $movie->original_title }}</p>
                <p>Nazione: {{ $movie->nationality }}</p>
                <p>Data di pubblicazione: {{ $movie->date }}</p>
                <p>Voto: {{ $movie->vote }}</p>
            </div>

            <div class="pe-5">
                <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
            </div>

        </section>

    </main>
@endsection

<style lang="scss" scoped>
    img {
        max-height: 500px;
    }
</style>
