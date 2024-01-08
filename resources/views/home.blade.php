@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('partials.hero')
    <main>
        @include('partials.comics')
        @include('partials.features')
    </main>

@endsection
