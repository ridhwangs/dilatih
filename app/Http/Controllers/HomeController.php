<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kursus;
class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'kursus' => Kursus::orderBy('id', 'desc')->limit(6)->get(),
        ];
        return view('home.index', $data);
    }
}
