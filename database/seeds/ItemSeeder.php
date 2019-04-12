<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();
        Item::create([

                'item_name' => 'シャドーボーダークルーネックセーター',
                'color' => 'BLACK',
                'quantity' => 20,
                'price' => 1490,
                'status_id' => 1,
                'category_id' => 1,
                'genre_id' => 1,
            ]);
        Item::create([
                'item_name' => 'ニットポロシャツ',
                'color' => 'BLACK',
                'quantity' => 10,
                'price' => 1990,
                'status_id' => 3,
                'category_id' => 1,
                'genre_id' => 1,
            ]);
        Item::create([
                'item_name' => 'スウェットハーフパンツ',
                'color' => 'WHITE',
                'quantity' => 20,
                'price' => 1490,
                'status_id' => 1,
                'category_id' => 3,
                'genre_id' => 1,
            ]);
        Item::create([
                'item_name' => 'テーラードジャケット',
                'color' => 'BLACK',
                'quantity' => 15,
                'price' => 2990,
                'status_id' => 1,
                'category_id' => 1,
                'genre_id' => 1,
            ]);
        Item::create([
                'item_name' => 'キャンバススニーカー',
                'color' => 'RED',
                'quantity' => 20,
                'price' => 1490,
                'status_id' => 1,
                'category_id' => 1,
                'genre_id' => 1,
            ]);
    }
}
