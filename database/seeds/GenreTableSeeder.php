<?php

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::truncate();
        Genre::create([
            'gender' => 'MENS'
        ]);
        Genre::create([
            'gender' => 'WOMEN'
        ]);
        Genre::create([
            'gender' => 'KIDS'
        ]);

    }
}
