<?php

use Illuminate\Database\Seeder;

class NationalitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nationalites')->insert([
            ['code' => 'CF', 'nationalite' => 'Centrafricaine'],
            ['code' => 'BF', 'nationalite' => 'Burkinabè'], 
            ['code' => 'SN', 'nationalite' => 'Sénégalaise'],
            ['code' => 'ST', 'nationalite' => 'Santoméenne']
        ]);
    }
}
