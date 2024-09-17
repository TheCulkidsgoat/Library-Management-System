@extends('layout.master')

@section('content')
<div class="container">
    <h1>Borrow Records</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Book</th>
                <th>Borrowed At</th>
                <th>Due Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrows as $borrow)
            <tr>
                <td>{{ $borrow->id }}</td>
                <td>{{ $borrow->user->name }}</td>
                <td>{{ $borrow->book->title }}</td>
                <td>{{ $borrow->borrowed_at->format('Y-m-d') }}</td>
                <td>{{ $borrow->due_date->format('Y-m-d') }}</td>
                <td>{{ ucfirst($borrow->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
