<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }
}
