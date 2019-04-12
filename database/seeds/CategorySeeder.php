<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Category::create([
                'category_name' => 'トップス',
            ]);

        Category::create([
                'category_name' => 'アウター/ジャケット',
            ]);

        Category::create([
                'category_name' => 'パンツ',
            ]);

        Category::create([
                'category_name' => 'シューズ',
            ]);
    }
}
