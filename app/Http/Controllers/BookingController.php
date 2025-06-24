<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return response()->json(Booking::with(['member', 'book'])->get());
    }

    public function store(Request $request)
    {
        $booking = Booking::create($request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            // Add other fields and validation as needed
        ]));
        return response()->json($booking->load(['member', 'book']), 201);
    }

    public function show($id)
    {
        $booking = Booking::with(['member', 'book'])->findOrFail($id);
        return response()->json($booking);
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update($request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            // Add other fields and validation as needed
        ]));
        return response()->json($booking->load(['member', 'book']));
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json(['message' => 'Booking deleted']);
    }
}