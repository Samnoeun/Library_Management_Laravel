<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::with('library', 'category')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'library_id' => 'required|exists:libraries,id',
            'category_id' => 'required|exists:categories,id',
            'published_at' => 'nullable|date',
            'status' => 'in:available,borrowed'
        ]);

        $book = Book::create($validated);
        return response()->json($book, 201);
    }

    public function show(Book $book)
    {
        return response()->json($book->load('library', 'category'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'library_id' => 'required|exists:libraries,id',
            'category_id' => 'required|exists:categories,id',
            'published_at' => 'nullable|date',
            'status' => 'in:available,borrowed'
        ]);

        $book->update($validated);
        return response()->json($book);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message' => 'Book deleted']);
    }
}