<?php

namespace App\Http\Controllers\Pistola;

use App\Http\Controllers\Controller;
use App\Models\Item;

class PistolaController extends Controller
{
    public function index()
    {
        $pistolas = Item::where('type', 'Pistola')->get();

        return view('pistola', compact('pistolas'));
    }
}
