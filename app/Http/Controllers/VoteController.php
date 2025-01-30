<?php

namespace App\Http\Controllers;

use App\Models\AwardType;
use App\Models\Category;
use App\Models\Nominee;
use App\Models\Technology;
use App\Models\Vote;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index(Request $request)
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $selectedCategoryId = $request->input('category');
        $userHasVoted = $user ? Vote::where('user_id', $user->id)->exists() : false;

        $categories = Category::all();


        $nominees = Nominee::when($selectedCategoryId, function ($query, $selectedCategoryId) {
            return $query->where('category_id', $selectedCategoryId);
        })->get();


        return view('contest', compact('categories', 'nominees', 'selectedCategoryId', 'userHasVoted'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nominee_id' => 'required|exists:nominees,id',
        ]);

        $user = \Illuminate\Support\Facades\Auth::user();
        $existingVote = Vote::where('user_id', $user->id)->first();
        if ($existingVote) {
            return redirect()->route('dashboard')->with('error', 'You have already voted');
        }
        Vote::create([
            'nominee_id' => $request->nominee_id,
            'user_id' => $user->id,
        ]);
        return redirect()->back()->with('success', 'Vote submitted successfully');
    }


}
