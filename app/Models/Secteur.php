<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;
    protected $fillable = ['SEC_CODE', 'SEC_LIBELLE'];

    public function reg(){
        return $this->hasMany(Region::class);
    }
}
