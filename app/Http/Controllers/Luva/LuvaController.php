<?php

namespace App\Http\Controllers\Luva;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class LuvaController extends Controller
{
    public function index()
    {
        $luvas = Item::where('type', 'Luva')->get();

        return view('luvas', compact('luvas'));
    }
}
