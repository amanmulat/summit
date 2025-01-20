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

        $nominees = Nominee::query();
        if ($request->category) {
            $nominees->where('category_id', $request->category);
        }
        if ($request->award_type) {
            $nominees->where('award_type_id', $request->award_type);
        }
        if ($request->technology) {
            $nominees->where('technology_id', $request->technology);
        }

        return view('contest', [
            'categories' => $categories,
            'awardTypes' => $awardTypes,
            'technologies' => $technologies,
            'nominees' => $nominees->get(),
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
