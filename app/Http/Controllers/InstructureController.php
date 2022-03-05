<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructureController extends Controller
{
    public function index()
    {
        return view('instructure.index');
    }
}
