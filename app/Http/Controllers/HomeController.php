<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Product;
use App\Models\Section;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Models\TravelCategory;
use App\Models\ProductCategory;

class HomeController extends Controller
{
    /**
     * Display a listing of resource
     *
     * @return void
     */
    public function index()
    {
        $products = Product::all();
        $travels = Trip::all();
        $categories = ProductCategory::all();
        $travelCategories = TravelCategory::all();
        $villages = Village::all();
        $sectionHero = Section::where('section', 1)->first();
        $sectionTravel = Section::where('section', 2)->first();
        
        return view('pages.home', [
            'products' => $products,
            'travels' => $travels,
            'categories' => $categories,
            'villages' => $villages,
            'sectionTravel' => $sectionTravel,
            'sectionHero' => $sectionHero,
            'travelCategories' => $travelCategories,
        ]);
    }
}
