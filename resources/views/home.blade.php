@extends('layouts.app')

@section('page_title')
    TV Movie
@endsection

@section('content')
    <main>
        <div class="d-flex align-items-center mb-3">
            <h1>Home Page</h1>
            <a href="{{ route('movies.index') }}" class="fw-bold ms-5">Vai alla lista dei film</a>
        </div>
        <h2>Il più visto oggi</h2>
        <div class="rounded-5 overflow-hidden jumbo">

            <img src="/img/ilgrandegiorno.jpg" alt="il grande giorno" class="w-100 h-100">
        </div>
        <section class="my-5 popular">
            <h2>I 4 film più popolari</h2>
            <div class="row mb-5">
                @foreach ($movies as $movie)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mycard py-3 rounded-4">
                        <div class="img-container">
                            <img src="{{ $movie->image }}" alt="{{ $movie->title }}" class="w-100 h-75">
                        </div>
                        <div class="title-container text-center mt-3 fs-3">
                            <a href="{{ route('movies.show', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
                            <p>Voto: {{ $movie->vote }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </main>
@endsection

<style lang="scss" scoped>
    .jumbo {
        height: 70vh;
    }

    .mycard {
        width: 200px;
        height: fit-content;
        transition: .8s;

        &:hover {
            background-color: darkgrey;
            cursor: pointer;
        }
    }
</style>
