<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductTestimonial;
use App\Models\Trip;
use App\Models\TripTestimonial;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function  discuss(Request $request, $type, $id, $slug)
    {
        $allowedType = [
            'produk',
            'travel'
        ];

        $request->validate([
            'name' => 'required|string|min:3',
            'comment' => 'required|string|min:3',
        ]);

        if (!in_array($type, $allowedType)) {
            return redirect()->back()->with('something wrong');
        }

        if ($type == 'produk') {
            $check = Product::where('id', $id)->first();

            if(!$check) {
                return redirect()->back()->with('product not found');
            }

            $resource = new ProductTestimonial();
            $resource->product_id = $check->id;
        }

        if ($type == 'travel') {
            $check = Trip::where('id', $id)->first();

            if(!$check) {
                return redirect()->back()->with('trip not found');
            }

            $resource = new TripTestimonial();
            $resource->trip_id = $check->id;
        }

        $resource->name = $request->input('name');
        $resource->comment = $request->input('comment');
        $resource->save();

        return redirect()->back();
    }
}
