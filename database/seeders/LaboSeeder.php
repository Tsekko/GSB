<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LaboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labos')->insert(array(
            array(
                'LAB_CODE' => 'BC',
                'LAB_NOM' => 'Bichat',
                'LAB_CHEFVENTE' => 'Suzanne Terminus',
            ),
            array(
                'LAB_CODE' => 'GY',
                'LAB_NOM' => 'Gyverny',
                'LAB_CHEFVENTE' => 'Marcel MacDouglas',
            ),
            array(
                'LAB_CODE' => 'SW',
                'LAB_NOM' => 'Swiss Kane',
                'LAB_CHEFVENTE' => 'Alain Poutre',
            ),
            ));
    }
}
