@extends('layout.master')

@section('content')
    <h1>Book Details</h1>

    <p><strong>Title:</strong> {{ $book->title }}</p>
    <p><strong>Genre:</strong>
        @if ($book->is_borrowed)
            <span style="color: red;">Borrowed</span>
        @else
            <span style="color: green;">Available</span>
        @endif
    </p>
    <p><strong>Borrowed Date:</strong> {{ $book->borrowed_at ?? 'N/A' }}</p>
    <p><strong>Due Date:</strong> {{ $book->due_date ?? 'N/A' }}</p>
    <p><strong>Returned Date:</strong> {{ $book->returned_at ?? 'N/A' }}</p>
@endsection
