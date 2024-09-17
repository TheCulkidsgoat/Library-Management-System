<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function create()
    {
        $users = User::all();
        $books = Book::all();

        return view('borrows.create', compact('users', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'due_date' => 'required|date',
            'borrower_name' => 'required|string|max:255', // Ensure this field is validated
        ]);

        // Insert the borrow record
        Borrow::create([
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
            'due_date' => $request->due_date,
            'borrower_name' => $request->borrower_name,
            'borrowed_at' => now(),
            'status' => 'borrowed',
        ]);

        return redirect()->route('borrows.index')->with('success', 'Book borrowed successfully.');
    }
}
