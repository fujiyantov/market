<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Trip;
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
        
        return view('pages.home', [
            'products' => $products,
            'travels' => $travels,
            'categories' => $categories,
        ]);
    }
}
