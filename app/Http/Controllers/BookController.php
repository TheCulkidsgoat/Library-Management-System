<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Method to show the form for creating a new book
    public function create()
    {
        return view('books.create');
    }

    // Method to store a newly created book in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'publication_date' => 'nullable|date',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book added successfully.');
    }

    // Method to display a listing of the books
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
    $book = Book::findOrFail($id);
    return view('books.show', compact('book'));
    }

    public function edit($id)
    {
    $book = Book::findOrFail($id);
    return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'genre' => 'required|string|max:255',
        'publication_date' => 'nullable|date',
    ]);

    $book = Book::findOrFail($id);
    $book->update($request->all());

    return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy($id)
    {
    $book = Book::findOrFail($id);
    $book->delete();

    return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }


}
