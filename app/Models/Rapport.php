<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    protected $fillable = ['VIS_MATRICULE', 'RAP_NUM', 'PRA_NUM', 'RAP_DATE', 'RAP_BILAN', 'RAP_MOTIF'];

    public function vis(){
        return $this->belongTo(Visiteur::class);
    }

    public function prat(){
        return $this->hasMany(Praticien::class);
    }
}