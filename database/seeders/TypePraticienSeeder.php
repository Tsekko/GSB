<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TypePraticienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_praticiens')->insert(array(
            array(
                'TYP_CODE' => 'MH',
                'TYP_LIBELLE' => 'Médecin Hospitalier',
                'TYP_LIEU' => 'Hopital ou clinique',
            ),
            array(
                'TYP_CODE' => 'MV',
                'TYP_LIBELLE' => 'Médecine de Ville',
                'TYP_LIEU' => 'Cabinet',
            ),
            array(
                'TYP_CODE' => 'PH',
                'TYP_LIBELLE' => 'Pharmacien Hospitalier',
                'TYP_LIEU' => 'Hopital ou clinique',
            ),
            array(
                'TYP_CODE' => 'PO',
                'TYP_LIBELLE' => 'Pharmacien Officine',
                'TYP_LIEU' => 'Pharmacie',
            ),
            array(
                'TYP_CODE' => 'PS',
                'TYP_LIBELLE' => 'Personnel de santé',
                'TYP_LIEU' => 'Centre paramédical',
            ),
        ));
    }
}
