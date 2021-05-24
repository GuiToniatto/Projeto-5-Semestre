<?php

namespace App\Http\Controllers\Sub;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class SubController extends Controller
{
    public function index()
    {
        $subs = Item::where('type', 'Sub')->get();

        return view('sub', compact('subs'));
    }
}
