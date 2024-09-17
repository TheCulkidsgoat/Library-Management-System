@extends('layout.master')

@section('content')
<div class="container">
    <h1>Borrow a Book</h1>

    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Borrow Form -->
    <form action="{{ route('borrows.store') }}" method="POST">
        @csrf

        <!-- User Selection -->
        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select name="user_id" class="form-select" required>
                <option value="">Select User</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('user_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Book Selection -->
        <div class="mb-3">
            <label for="book_id" class="form-label">Book</label>
            <select name="book_id" class="form-select" required>
                <option value="">Select Book</option>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
            @error('book_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Due Date -->
        <div class="mb-3">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" name="due_date" class="form-control" required>
            @error('due_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Borrow</button>
    </form>
</div>
@endsection
