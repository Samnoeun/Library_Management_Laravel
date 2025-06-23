<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index() { return response()->json(Library::all()); }
    public function store(Request $request) {
        $library = Library::create($request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255'
        ]));
        return response()->json($library, 201);
    }
    public function show(Library $library) { return response()->json($library); }
    public function update(Request $request, Library $library) {
        $library->update($request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255'
        ]));
        return response()->json($library);
    }
    public function destroy(Library $library) {
        $library->delete();
        return response()->json(['message' => 'Library deleted']);
    }
}