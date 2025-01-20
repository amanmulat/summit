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

        $technologies = Technology::all();
        $awardTypes = AwardType::all();
        $categories = Category::all();

        // dd($request->all());

        $nominees = Nominee::when($request->input('category'), function ($query) use ($request) {
            return $query->where('category_id', $request->category);
        })->when($request->input('award_type'), function ($query) use ($request) {
            return $query->where('award_type_id', $request->awardType);
        })->when($request->input('technology'), function ($query) use ($request) {
            return $query->where('technology_id', $request->technology);
        })->get();

        return view('contest', [
            'categories' => $categories,
            'awardTypes' => $awardTypes,
            'technologies' => $technologies,
            'nominees' => $nominees,
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nominee_id' => 'required|exists:nominees,id',
        ]);

        $user = \Illuminate\Support\Facades\Auth::user();
        $nomineeId = $request->input('nominee_id');
        $existingVote = Vote::where('user_id', $user->id)->where('nominee_id', $nomineeId)->first();
        if ($existingVote) {
            return redirect()->route('dashboard')->with('error', 'You have already voted for this nominee');
        }
        Vote::create([
            'nominee_id' => $request->nominee_id,
            'user_id' => $user->id,
        ]);
        return redirect()->back()->with('success', 'Vote submitted successfully');
    }

    public function getNomineeByAwardType($award_type_id)
    {
        $nominees = Nominee::where('award_type_id', $award_type_id)->get();
        return view('contest', compact('nominees'));
    }
}
