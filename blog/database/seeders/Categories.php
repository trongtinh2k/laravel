<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;


class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('categories')->insert([
                'category_id' => random_int(1, 999999),
                'category_name' => Str::random(40),
                'status'=>random_int(0,1),
            ]);
        }
    }
}
