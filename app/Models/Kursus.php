<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    protected $table = "kursus";
    public $timestamps = true;

    public function instruktur() {
        return $this->hasOne('App\Models\Instruktur','kode_instruktur', 'kode_instruktur');
    }
}
