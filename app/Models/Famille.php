<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use HasFactory;
    protected $fillable = ['FAM_CODE', 'FAM_LIBELLE'];

    public function med(){
        return $this->hasMany(Medicament::class);
    }
}