<?php

namespace App\Http\Controllers;

use App\Reals;
use Illuminate\Http\Request;

class RealController extends Controller
{
    public function index()
    {
        return view('reals.add_2');
    }
}
