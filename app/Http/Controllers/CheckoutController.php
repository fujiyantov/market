<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Trip;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout($type, $id, $slug)
    {
        switch ($type) {
            case 'produk':
                $item = Product::where('id', $id)->first();
                break;

            case 'travel':
                $item = Trip::where('id', $id)->first();
                break;

            default:
                # code...
                break;
        }

        return view('pages.checkout', [
            'item' => $item,
            'type' => $type,
        ]);
    }
}
