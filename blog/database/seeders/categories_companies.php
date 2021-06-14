<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class categories_companies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        for ($i = 0; $i < 10; $i++) {
            DB::table('categories_companies')->insert([
                'company_id' => random_int(1, 999999),
                'category_id' => random_int(1, 999999),
                'status'=>random_int(0,1),
            ]);
        }
    }
}
