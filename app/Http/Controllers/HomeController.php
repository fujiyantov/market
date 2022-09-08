<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Product;
use App\Models\Section;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Models\TravelCategory;
use App\Models\ProductCategory;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

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

        $transactionHeroID = 0;
        $transactionID = [];
        $transactionHero = null;
        $transaction = null;

        $collections = Transaction::where('type', 'produk')->select('product_id', DB::raw('count(*) as total'))->groupBy('product_id')->orderBy('total', 'desc')->take(5)->get();
        if (count($collections) > 0) {
            foreach ($collections as $key => $collection) {
                if ($key == 0) {
                    $transactionHeroID = $collection->product_id;
                } else {
                    $transactionID[] = $collection->product_id;
                }
            }
        }

        if ($transactionHeroID > 0) {
            $transactionHero = Product::where('id', $transactionHeroID)->get();
        }
        
        if (count($transactionID) > 0) {
            $transaction = Product::whereIn('id', $transactionID)->get();
        }

        return view('pages.home', [
            'products' => $products,
            'travels' => $travels,
            'categories' => $categories,
            'villages' => $villages,
            'sectionTravel' => $sectionTravel,
            'sectionHero' => $sectionHero,
            'travelCategories' => $travelCategories,
            'transactionHero' => $transactionHero,
            'transaction' => $transaction,
        ]);
    }
}
