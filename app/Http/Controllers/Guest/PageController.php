<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $trains =  Train::where('orario_di_partenza', '>=', now()->format('Y-m-d'))->get();;
        return view('home', compact('trains'));
    }
}
