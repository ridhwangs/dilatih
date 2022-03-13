<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Models\Kursus;
use App\Models\Instruktur;

class TrainingController extends Controller
{
    public function index()
    {
        $data = [
            'kursus' => Kursus::orderBy('date_start', 'asc')->where('status', 1)->paginate(16),
        ];
        return view('training.index', $data);
    }

    public function show(Request $request, $id)
    {
        $where = [
            'nama' => Str::title(str_replace('-', ' ', $id))
        ];
        $data = [
            'detail' => Kursus::with('instruktur')->where($where)->first(),
        ];
        return view('training.show', $data);
    }

    public function create()
    {
        $data = [
            'instruktur' => Instruktur::get(),
        ];
        return view('training.form', $data);
    }

    public function store(Request $request)
    {
       $rules = [
            'nama' => 'required|unique:kursus',
            'deskripsi' => 'required|',
            'date_start' => 'required|',
            'date_end' => 'required|',
            'kategori' => 'required|',
        ];
  
        $validator = Validator::make($request->all(), $rules);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        

        $data = [
            'kode_kursus' => Str::random(6),
            'kode_instruktur' => $request->kode_instruktur,
            'nama' => addslashes($request->nama),
            'deskripsi' => $request->deskripsi,
            'jenis' => $request->jenis,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'biaya' => $request->biaya,
            'kategori' => $request->kategori,
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

        $create = Kursus::insert($data);
        return redirect()->route('training.detail', ['slug' => Str::slug($data['nama'], '-')]);
    }
}
