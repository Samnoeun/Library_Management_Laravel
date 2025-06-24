<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return response()->json(Member::all());
    }

    public function store(Request $request)
    {
        $member = Member::create($request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email'
        ]));
        return response()->json($member, 201);
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return response()->json($member);
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->update($request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email,' . $id
        ]));
        return response()->json($member);
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return response()->json(['message' => 'Member deleted']);
    }
}