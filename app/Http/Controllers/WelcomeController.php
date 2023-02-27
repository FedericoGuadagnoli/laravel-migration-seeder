<?php

namespace App\Http\Controllers;

use App\Models\Train;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
