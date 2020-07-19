<?php

use Illuminate\Database\Seeder;

class RepondantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('repondants')->insert([
           ['contact' => '0022812131415', 'nom' => 'BABA', 'prenom' => 'Samuel'],
           ['contact' => '0022813141516', 'nom' => 'SANGHAM', 'prenom' => 'Augustin'],
           ['contact' => '0022817181920', 'nom' => 'BAWARA', 'prenom' => 'Titianne'],
           ['contact' => '0022821222324', 'nom' => 'M\'BOYO', 'prenom' => 'Esther'],
           ['contact' => '0022825262728', 'nom' => 'APOSAZ', 'prenom' => 'Esther']           
        ]);
    }
}
