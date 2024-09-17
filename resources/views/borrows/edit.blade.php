@extends('layout.master')

@section('content')
<div class="container">
    <h1>Edit Borrow Record</h1>

    <form action="{{ route('borrows.update', $borrow->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $borrow->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="book_id">Book</label>
            <select name="book_id" class="form-control" required>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" {{ $borrow->book_id == $book->id ? 'selected' : '' }}>
                        {{ $book->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" name="due_date" class="form-control" value="{{ $borrow->due_date }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="borrowed" {{ $borrow->status == 'borrowed' ? 'selected' : '' }}>Borrowed</option>
                <option value="returned" {{ $borrow->status == 'returned' ? 'selected' : '' }}>Returned</option>
                <option value="overdue" {{ $borrow->status == 'overdue' ? 'selected' : '' }}>Overdue</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
