<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\ProductTestimonial;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $collection = Product::all();
        $categories = ProductCategory::all();

        return view('pages.product', [
            'collection' => $collection,
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $item = Product::findOrFail($id);
        $testimonials = ProductTestimonial::where('product_id', $id)->get();

        return view('pages.product-detail', [
            'item' => $item,
            'testimonials' => $testimonials,
        ]);
    }
}
