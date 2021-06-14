<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class diary_days_of_wweek extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('diary_days_of_weeks')->insert([
                'diary_days_of_week_id' => random_int(1, 999999),
                'diary_days_of_week_description' => Str::random(5),
                'intership_diary_week_id' => random_int(1, 999999),
                'diary_days_of_week_date' => random_int(1, 999999),
                'status'=>random_int(0,1),
            ]);
        }
    }
}
