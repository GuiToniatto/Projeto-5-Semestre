<?php

namespace App\Http\Controllers\Escopeta;

use App\Http\Controllers\Controller;
use App\Models\Item;

class EscopetaController extends Controller
{
    public function index()
    {
        $escopeta = Item::where('type', 'Escopeta')->get();

        return view('escopeta', compact('escopeta'));
    }
}
