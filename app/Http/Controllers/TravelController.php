<?php

namespace App\Http\Controllers;

use App\Models\TravelCategory;
use App\Models\Trip;
use Illuminate\Http\Request;
use App\Models\TripTestimonial;

class TravelController extends Controller
{
    public function index()
    {
        $collection = Trip::all();
        $categories = TravelCategory::all();

        return view('pages.travel', [
            'collection' => $collection,
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $item = Trip::findOrFail($id);
        $testimonials = TripTestimonial::where('trip_id', $id)->get();

        return view('pages.travel-detail', [
            'item' => $item,
            'testimonials' => $testimonials,
        ]);
    }
}
