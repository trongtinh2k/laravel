<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class users_group extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('users_groups')->insert([
                'group_id' => random_int(1, 9999),
                'user_id' => random_int(1, 9999),

                
                'status'=>random_int(0,1),
            ]);
        }
    }
}
