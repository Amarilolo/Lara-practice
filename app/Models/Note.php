<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable =['Arab_note', 'Math_note', 'SVT_note', 'stagiaireID'];
    public function Stagiaire(){
        return $this->belongsTo(Stagiaire::class,'id');
    }
}