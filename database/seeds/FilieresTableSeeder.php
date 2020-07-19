<?php

use Illuminate\Database\Seeder;

class FilieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('filieres')->insert([
            ['faculte_id' => '1', 'filiere' => 'Médecine'],
            ['faculte_id' => '2', 'filiere' => 'Sociologie'],
            ['faculte_id' => '3', 'filiere' => 'Biologie']
        ]);
    }
}
