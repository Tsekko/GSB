<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = ['REG_CODE', 'SEC_CODE', 'REG_NOM'];

    public function sec(){
        return $this->belongsTo(Secteur::class);
    }
}
