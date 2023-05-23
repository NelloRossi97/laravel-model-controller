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

    </main>
@endsection

<style lang="scss" scoped>
    .jumbo {
        height: 70vh;
    }
</style>
