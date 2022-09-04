<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Trip;
use App\Models\Village;
use Illuminate\Http\Request;

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
        $villages = Village::all();
        
        return view('pages.home', [
            'products' => $products,
            'travels' => $travels,
            'categories' => $categories,
            'villages' => $villages,
        ]);
    }
}
