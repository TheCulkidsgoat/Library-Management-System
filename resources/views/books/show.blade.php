@extends('layout.master')

@section('content')
<div class="container">
    <h1>Book Details</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $book->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th>Genre</th>
            <td>{{ $book->genre }}</td>
        </tr>
        <tr>
            <th>Publication Date</th>
            <td>{{ $book->publication_date ? \Carbon\Carbon::parse($book->publication_date)->format('Y-m-d') : 'N/A' }}</td>
        </tr>
    </table>

    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
</div>
@endsection
