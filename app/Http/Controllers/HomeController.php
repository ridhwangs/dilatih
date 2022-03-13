<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kursus;
use App\Models\Link;

class HomeController extends Controller
{
    public function index($param = '')
    {
        if(!empty($param)){
            return view('404');
        }else{
            $data = [
                'kursus' => Kursus::with('instruktur')->where('status', 1)->orderBy('date_start', 'asc')->limit(6)->get(),
            ];
            return view('home.index', $data);
        }

    }

    public function status($keyword)
    {
        $response = Link::where('keyword', $keyword)->first();
        return response()->json($response, 200);
    }
}
