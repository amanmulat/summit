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

        $selectedCategoryId = $request->input('category');


        $categories = Category::all();


        $nominees = Nominee::when($selectedCategoryId, function ($query, $selectedCategoryId) {
            return $query->where('category_id', $selectedCategoryId);
        })->get();


        return view('home', compact('categories', 'nominees', 'selectedCategoryId'));
    }
}
