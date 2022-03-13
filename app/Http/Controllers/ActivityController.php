<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Kursus;
use App\Models\Instruktur;

class ActivityController extends Controller
{
    public function index()
    {
        $data = [
            'kursus' => Kursus::orderBy('date_start', 'asc')->where('status', 0)->paginate(16),
        ];
        return view('activity.index', $data);
    }

    public function show(Request $request, $id)
    {
        $where = [
            'nama' => Str::title(str_replace('-', ' ', $id))
        ];
        $data = [
            'detail' => Kursus::with('instruktur')->where($where)->first(),
        ];
        return view('activity.show', $data);
    }
}
