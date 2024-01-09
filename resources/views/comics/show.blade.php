@extends('layouts.app')

@section('title', 'Comic')

@section('content')

    @include('partials.hero')
    <main id="showComic">
        <div id="blueLine">
            <div class="container imgPosterContainer">
                <img class="imagePoster" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
        </div>
        <section id="comicInfo" class="container py-5">
            <div class="row">
                <div class="col-9 p-0 pe-5">
                    <div class="d-flex justify-content-between">
                        <h2 class="pb-3">{{ $comic->title }}</h2>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </div>

                    <div id="bar" class="d-flex">
                        <div class="col-9 d-flex justify-content-between px-4 py-2">
                            <span>U.S. Price: {{ $comic->price }}</span>
                            <span>AVAILABLE</span>
                        </div>
                        <div class="col-3 text-center availableBox py-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Check Availability
                            </a>
                        </div>
                    </div>
                    <p class="descriptionComic">{{ $comic->description }}</p>
                </div>
                <div class="col-3 p-0 text-end">
                    <p class="adv">ADVERTISEMENT</p>
                    <img class="" src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="advertisement">
                </div>
            </div>
        </section>
        <section id="specs">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h4 class="pb-3">Specs</h4>
                        <div class="py-2 border-top row">
                            <span class="col-3">Series: </span>
                            <span class="col-9 seriesName">{{ $comic->series }}</span>
                        </div>
                        <div class="py-2 border-top row">
                            <span class="col-3">U.S. Price: </span>
                            <span class="col-9">{{ $comic->price }}</span>
                        </div>
                        <div class="py-2 border-top border-bottom row">
                            <span class="col-3">On Sale Date: </span>
                            <span class="col-9">{{ $comic->sale_date }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.features')
    </main>

@endsection
