<?php

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();
        Status::create([
                'sale_status' => '販売中'
            ]);

        Status::create([
                'sale_status' => '在庫なし'
            ]);

        Status::create([
                'sale_status' => '販売停止'
            ]);
    }
}
