<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
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

    public function store(Request $request, $type, $id, $slug)
    {
        $allowType = [
            'produk',
            'travel'
        ];

        $request->validate([
            'name' => 'required|string|min:3',
            'phone' => 'required|numeric',
            'code' => 'required|numeric',
        ]);

        if (!in_array($type, $allowType)) {
            return 422;
        }

        if ($type == 'produk') {
            $check = Product::where('id', $id)->first();
            $grand_total = $check->price + $request->code;
        } else {
            $check = Trip::where('id', $id)->first();
            $grand_total = $check->price + $request->code;
        }

        if (!$check) {
            return 400;
        }

        $transaction = new Transaction();
        $transaction->name = $request->name;
        $transaction->phone = $request->phone;
        $transaction->type = $request->type;
        $transaction->grand_total = $grand_total;

        if ($type == 'produk') {
            $transaction->product_id = $id;
        } else {
            $transaction->trip_id = $id;
        }

        $transaction->save();

        return 200;
    }
}
