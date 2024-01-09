@extends('layouts.app')

@section('title', 'Create a New Comic')

@section('content')
    <main>
        <section class="container">
            <h1>Add a new comic</h1>
            <div class="row gy-4">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('comics.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 mx-3">
                                <label for="title" class="form-label">Title:</label>
                                <input type="text" value="{{ old('title') }}" class="form-control" id="title"
                                    name="title" placeholder="insert title" required>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="description" class="form-label">Description:</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="image" class="form-label">Image:</label>
                                <input type="url" class="form-control" id="image" name="image"
                                    placeholder="insert thumb url">
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="price" class="form-label">Price:</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="insert price" required>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="series" class="form-label">Series:</label>
                                <input type="text" class="form-control" id="series" name="series"
                                    placeholder="insert series" required>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="sale_date" class="form-label">Sale Date:</label>
                                <input type="date" class="form-control" id="sale_date" name="sale_date"
                                    placeholder="insert sale_date format YYYY-MM-DD" required>
                            </div>
                            <div class="mb-3 mx-3">
                                <label for="type" class="form-label">Type:</label>
                                <select name="type" id="type" class="form-select" required>
                                    <option value="comicBook">Comic Book</option>
                                    <option value="graphicNovel">Graphic Novel</option>
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
