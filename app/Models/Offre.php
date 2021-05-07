<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = ['VIS_MATRICULE', 'RAP_NUM', 'MED_DEPOTLEGAL', 'OFF_QTE'];
}