<?php

namespace App\Http\Controllers\Rifle;

use App\Http\Controllers\Controller;
use App\Models\Item;

class RifleController extends Controller
{
    public function index()
    {
        $rifles = Item::where('type', 'Rifle')->get();

        return view('rifles', compact('rifles'));
    }
}
