<?php

namespace App\Http\Controllers;

use App\Models\Train;

class WelcomeController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
}
