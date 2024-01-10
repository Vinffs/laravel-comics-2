@extends('layouts.app')

@section('title', 'Edit a Comic')

@section('content')
    <main>
        <section class="container">
            <h1>Edit: {{ $comic->title }} </h1>
            <div class="row gy-4">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 mx-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" value="{{ old('title', $comic->title) }}" class="form-control"
                                    id="title" name="title" placeholder="insert title" required>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="description" class="form-label">Description:</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                                    {{ old('description', $comic->description) }}
                                </textarea>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="image" class="form-label">Image:</label>
                                <input type="url" class="form-control" id="image" name="image"
                                    placeholder="insert thumb url" value="{{ old('image', $comic->thumb) }}">
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="price" class="form-label">Price:</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="insert price" value="{{ old('price', $comic->price) }}" required>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="series" class="form-label">Series:</label>
                                <input type="text" class="form-control" id="series" name="series"
                                    placeholder="insert series" value="{{ old('series', $comic->series) }}" required>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="sale_date" class="form-label">Sale Date:</label>
                                <input type="date" class="form-control" id="sale_date" name="sale_date"
                                    placeholder="insert sale_date format YYYY-MM-DD"
                                    value="{{ old('sale_date', $comic->sale_date) }}" required>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="type" class="form-label">Type:</label>
                                <select name="type" id="type" class="form-select" required>
                                    <option value="comicBook"
                                        {{ old('type', $comic->type == 'comicBook' ? 'selected' : '') }}>Comic Book</option>
                                    <option value="graphicNovel"
                                        {{ old('type', $comic->type == 'graphicNovel' ? 'selected' : '') }}>Graphic Novel
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3 mx-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>

        </section>

    </main>

@endsection
