<?php

use Illuminate\Database\Seeder;

class FacultesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('facultes')->insert([
            ['ufr' => 'FSS'],
            ['ufr' => 'FSH'],
            ['ufr' => 'FDS']
        ]);
    }
}
