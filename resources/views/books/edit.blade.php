@extends('layout.master')

@section('content')
<div class="container">
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $book->title) }}" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" class="form-control" value="{{ old('author', $book->author) }}" required>
            @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" id="genre" name="genre" class="form-control" value="{{ old('genre', $book->genre) }}" required>
            @error('genre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="publication_date">Publication Date</label>
            <input type="date" id="publication_date" name="publication_date" class="form-control" value="{{ old('publication_date', $book->publication_date) }}">
            @error('publication_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
