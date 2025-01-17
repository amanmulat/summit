<?php

namespace App\Http\Controllers;

use App\Models\AwardType;
use App\Models\Category;
use App\Models\Nominee;
use App\Models\Technology;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getNominees()
    {
        $nominees = Nominee::with('votes')->get();
        return $nominees;
    }

    public function getCategories()
    {
        $categories = Category::all();
        return $categories;
    }

    public function getNomineeByCategory($category_id)
    {
        $nominees = Nominee::where('category_id', $category_id)->get();
        return view('contest', compact('nominees'));
    }

    public function getNomineeByTechnology($technology_id)
    {
        $nominees = Nominee::where('technology_id', $technology_id)->get();
        return view('contest', compact('nominees'));
    }

    public function getNomineeByAwardType($award_type_id)
    {
        $nominees = Nominee::where('award_type_id', $award_type_id)->get();
        return view('contest', compact('nominees'));
    }

    public function getTechnologies()
    {
        $technologies = Technology::all();
        return $technologies;
    }

    public function getAwardType()
    {
        $awardTypes = AwardType::all();
        return $awardTypes;
    }
}
