<?php

namespace App\Http\Controllers\Faca;

use App\Http\Controllers\Controller;
use App\Models\Item;

class FacaController extends Controller
{
    public function index()
    {
        $facas = Item::where('type', 'Faca')->get();

        return view('facas', compact('facas'));
    }
}
