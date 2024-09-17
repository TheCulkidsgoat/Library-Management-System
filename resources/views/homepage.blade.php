@extends('layout.master')

@section('title', 'Home - Book Library Management System')

@section('content')
<div class="container mt-5">

    <div class="jumbotron text-center bg-light p-5 mb-4 rounded">
        <h1 class="display-4">Welcome to Bright's Library</h1>
        <p class="lead">Manage your library efficiently by adding, viewing, editing, borrowing, and deleting books.</p>
        <hr class="my-4">
        <p>Start managing your library now by using the buttons below.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('books.create') }}" role="button">Add New Book</a>
        <a class="btn btn-secondary btn-lg" href="{{ route('books.index') }}" role="button">View All Books</a>
        <a class="btn btn-success btn-lg" href="{{ route('borrows.create') }}" role="button">Borrow a Book</a>
    </div>
</div>
@endsection
