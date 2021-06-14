<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class intership_diary_week extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('intership_diary_weeks')->insert([
                'intership_diary_week_id' => random_int(1, 9999),
                'intership_diary_week' => Str::random(5),
                'student_id' => random_int(1, 9999),
                'status'=>random_int(0,1),
            ]);
        }
    }
}
