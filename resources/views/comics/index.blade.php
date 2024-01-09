@extends('layouts.app')

@section('title', 'Comic Index')

@section('content')

    @include('partials.hero')
    <main id="mainContent">
        <section id="comics">
            <button id='currentSeries'>CURRENT SERIES</button>
            @if (session()->has('message'))
                <div class="container alert alert-success">{{ session()->get('message') }}</div>
            @endif
            <div class="container d-flex justify-content-end">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">New Comic</a>
            </div>

            <div class="row container justify-content-center mx-auto">
                @foreach ($comics as $comic)
                    <div class="col-5 col-sm-5 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="card border-white my-3 d-flex flex-column justify-content-between">
                            <div>
                                <img src="{{ $comic->thumb }}" class="card-img-top rounded-0" alt={{ $comic->title }}>
                            </div>
                            <div class=" card-body d-flex p-0 pt-2 mx-auto">
                                <h5 class="text-center">{{ $comic->title }}</h5>
                            </div>
                            <a class="btn-primary btn" href="{{ route('comics.show', $comic->id) }}">See Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <button id="loadMore">LOAD MORE</button>
            </div>
        </section>
        @include('partials.features')
    </main>

@endsection
