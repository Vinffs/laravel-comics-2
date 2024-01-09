@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('partials.hero')
    <main>
        {{-- @include('comics.index') --}}
        @include('partials.features')
    </main>

@endsection
