<?php

use Illuminate\Database\Seeder;

class AnneeacademiquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('anneeacademiques')->insert([
            ['annee' => '2019-2020']
        ]);
    }
}
