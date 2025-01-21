<?php

namespace App\Http\Controllers;

use App\Models\AwardType;
use App\Models\Category;
use App\Models\Nominee;
use App\Models\Technology;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {

        $technologies = Technology::all();
        $awardTypes = AwardType::all();
        $categories = Category::all();



        $nominees = Nominee::when($request->input('category'), function ($query) use ($request) {
            return $query->where('category_id', $request->category);
        })->when($request->input('awardType'), function ($query) use ($request) {
            return $query->where('award_type_id', $request->awardType);
        })->when($request->input('technology'), function ($query) use ($request) {
            return $query->where('technology_id', $request->technology);
        })->get();

        return view('home', [
            'categories' => $categories,
            'awardTypes' => $awardTypes,
            'technologies' => $technologies,
            'nominees' => $nominees,
        ]);
    }
}
