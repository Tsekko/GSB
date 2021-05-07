<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;
    protected $fillable = ['MED_DEPOTLEGAL', 'MED_NOMCOMMERCIAL', 'FAM_CODE', 'MED_COMPOSITION', 'MED_EFFETS', 'MEC_CONTREINDIC', 'MED_PRIXECHANTILLON'];

    public function fam(){
        return $this->belongsTo(Famille::class);
    }
}