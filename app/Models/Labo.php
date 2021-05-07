<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labo extends Model
{
    use HasFactory;
    protected $fillable = ['LAB_CODE', 'LAB_NOM', 'LAB_CHEFVENTE'];

    public function vis(){
        return $this->hasMany(Visiteur::class);
    }
}