<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            FacultesTableSeeder::class,
            FilieresTableSeeder::class,
            NationalitesTableSeeder::class,
            AnneeacademiquesTableSeeder::class,
            CycleniveausTableSeeder::class,
            RepondantsTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
