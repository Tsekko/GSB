<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'VIS_MATRICULE' => 'a131',
                'VIS_NOM' => 'Villechalane',
                'VIS_PRENOM' => 'Louis',
                'VIS_ADRESSE' => '8 cours Lafontaine',
                'VIS_CP' => '29000',
                'VIS_VILLE' => 'BREST',
                'VIS_DATEEMBAUCHE' => '1992-12-11',
                'SEC_CODE' => NULL,
                'LAB_CODE' => 'SW',
                'password' => Hash::make('11-dec-1992'),
            ),
            array(
                'VIS_MATRICULE' => 'a17',
                'VIS_NOM' => 'Andre',
                'VIS_PRENOM' => 'David',
                'VIS_ADRESSE' => '1 r Aimon de Chissée',
                'VIS_CP' => '38100',
                'VIS_VILLE' => 'GRENOBLE',
                'VIS_DATEEMBAUCHE' => '1991-08-26',
                'SEC_CODE' => NULL,
                'LAB_CODE' => 'GY',
                'password' => Hash::make('26-aug-1991'),
            ),
            array(
                'VIS_MATRICULE' => 'a55',
                'VIS_NOM' => 'Bedos',
                'VIS_PRENOM' => 'Christian',
                'VIS_ADRESSE' => '1 r Bénédictins',
                'VIS_CP' => '65000',
                'VIS_VILLE' => 'TARBES',
                'VIS_DATEEMBAUCHE' => '1987-07-17',
                'SEC_CODE' => NULL,
                'LAB_CODE' => 'GY',
                'password' => Hash::make('17-jul-1987'),
            ),
            array(
                'VIS_MATRICULE' => 'a93',
                'VIS_NOM' => 'Tusseau',
                'VIS_PRENOM' => 'Louis',
                'VIS_ADRESSE' => '22 r Renou',
                'VIS_CP' => '86000',
                'VIS_VILLE' => 'POITIERS',
                'VIS_DATEEMBAUCHE' => '1999-01-02',
                'SEC_CODE' => NULL,
                'LAB_CODE' => 'SW',
                'password' => Hash::make('02-jan-1999'),
            ),
            array(
                'VIS_MATRICULE' => 'b13',
                'VIS_NOM' => 'Bentot',
                'VIS_PRENOM' => 'Pascal',
                'VIS_ADRESSE' => '11 av 6 Juin',
                'VIS_CP' => '67000',
                'VIS_VILLE' => 'STRASBOURG',
                'VIS_DATEEMBAUCHE' => '1996-03-11',
                'SEC_CODE' => NULL,
                'LAB_CODE' => 'GY',
                'password' => Hash::make('11-mar-1996'),
            ),
            array(
                'VIS_MATRICULE' => 'b16',
                'VIS_NOM' => 'Bioret',
                'VIS_PRENOM' => 'Luc',
                'VIS_ADRESSE' => '1 r Linne',
                'VIS_CP' => '35000',
                'VIS_VILLE' => 'RENNES',
                'VIS_DATEEMBAUCHE' => '1997-03-21',
                'SEC_CODE' => NULL,
                'LAB_CODE' => 'SW',
                'password' => Hash::make('21-mar-1997'),
            ),
            array(
                'VIS_MATRICULE' => 'b19',
                'VIS_NOM' => 'Bunisset',
                'VIS_PRENOM' => 'Francis',
                'VIS_ADRESSE' => '10 r Nicolas Chorier',
                'VIS_CP' => '85000',
                'VIS_VILLE' => 'La ROCHE SUR YON',
                'VIS_DATEEMBAUCHE' => '1999-01-31',
                'SEC_CODE' => NULL,
                'LAB_CODE' => 'GY',
                'password' => Hash::make('31-jan-1999'),
            ),
            ));
    }
}
