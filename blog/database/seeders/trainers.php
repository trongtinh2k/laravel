<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class trainers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('trainer')->insert([
                'trainer_id' => random_int(1, 9999),
                'trainer_name' => Str::random(5),
                'company_id' => random_int(1, 9999),
                'trainer_phone' => random_int(1, 9999),
                'is_leader' =>uniqid(random_int(0,1)),
                'user_id' => random_int(1, 9999),
                'status'=>random_int(0,1),
            ]);
        }
    }
}
