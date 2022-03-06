<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Models\Instruktur;

class InstructureController extends Controller
{
    public function index()
    {
        $data = [
            'instruktur' => Instruktur::get(),
        ];
        return view('instructure.index', $data);
    }

    public function create()
    {
        return view('instructure.form');
    }

    public function store(Request $request)
    {
       $rules = [
            'kode_instruktur' => 'required|unique:instruktur',
            'nama_instruktur' => 'required|',
            'bidang' => 'required|',
        ];
  
        $validator = Validator::make($request->all(), $rules);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'kode_instruktur' => $request->kode_instruktur,
            'nama_instruktur' => addslashes($request->nama_instruktur),
            'bidang' => $request->bidang,
            'linkedin' => $request->linkedin,
            'deskripsi' => $request->deskripsi,
            'created_at' => date('Y-m-d H:i:s')
        ];
        if($request->file('image') == "") {
           
        }else{
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/image', $image->hashName());
            $data['image'] = $image->hashName();
        }
        // print_r($data);

        $create = Instruktur::insert($data);
        return redirect()->route('instructure');
    }
}
