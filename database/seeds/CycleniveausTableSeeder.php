<?php

use Illuminate\Database\Seeder;

class CycleniveausTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cycleniveaus')->insert([
            ['cycleniveau' => 'L1'],
            ['cycleniveau' => 'L2'],
            ['cycleniveau' => 'L3'],
            ['cycleniveau' => 'M1'],
            ['cycleniveau' => 'M2'],
            ['cycleniveau' => 'D1'],
            ['cycleniveau' => 'D2'],
            ['cycleniveau' => 'D3']
        ]);
    }
}
