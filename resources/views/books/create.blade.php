@extends('layout.master')

@section('content')
<div class="container">
    <h1>Add a New Book</h1>

    <!-- Display success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Book Addition Form -->
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Author Input -->
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}" required>
            @error('author')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Genre Input -->
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" value="{{ old('genre') }}" required>
            @error('genre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Publication Date Input -->
        <div class="mb-3">
            <label for="publication_date" class="form-label">Publication Date</label>
            <input type="date" name="publication_date" id="publication_date" class="form-control" value="{{ old('publication_date') }}">
            @error('publication_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>
@endsection
