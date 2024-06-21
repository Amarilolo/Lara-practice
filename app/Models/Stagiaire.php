<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'filiere', 'status', 'date_naisance'];
    public function Notes(){
        return $this->hasOne(Note::class, 'stagiaireID');
    }
 
}