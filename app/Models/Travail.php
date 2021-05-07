<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;
    protected $fillable = ['VIS_MATRICULE', 'VIS_NOM', 'VIS_PRENOM', 'VIS_ADRESSE', 'VIS_CP', 'VIS_VILLE', 'VIS_DATEEMBAUCHE', 'SEC_CODE', 'LAB_CODE'];

    public function lab(){
        return $this->belongTo(Labo::class);
    }

    public function rap(){
        return $this->hasMany(Rapport::class);
    }
}