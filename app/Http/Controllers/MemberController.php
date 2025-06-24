<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return response()->json(Member::with('user', 'library')->get());
    }

    public function store(Request $request)
    {
        $member = Member::create($request->validate([
            'user_id' => 'required|exists:users,id',
            'library_id' => 'required|exists:libraries,id',
        ]));
        return response()->json($member, 201);
    }

    public function show($id)
    {
        $member = Member::with('user', 'library')->findOrFail($id);
        return response()->json($member);
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->update($request->validate([
            'user_id' => 'required|exists:users,id',
            'library_id' => 'required|exists:libraries,id',
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
