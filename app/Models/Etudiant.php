<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'phone',
        'email',
        'dateNaissance',
        'id_ville'
    ];

    public function blogHasUser(){
        return $this->hasOne('App\Models\Etudiant', 'id', 'etudiant_id');
    }
}
