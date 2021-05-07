<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praticien extends Model
{
    use HasFactory;
    protected $fillable = ['PRA_NOM', 'PRA_PRENOM', 'PRA_ADRESSE', 'PRA_CP', 'PRA_VILLE', 'PRA_COEFNOTORIETE', 'TYP_CODE'];

    public function typ(){
        return $this->belongsTo(TypePraticien::class);
    }

    public function rap(){
        return $this->hasMany(Rapport::class);
    }
}
