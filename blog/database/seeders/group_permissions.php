<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class group_permissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('groups_permissions')->insert([
                'group_id' => random_int(1, 999999),
                'permission_id' => random_int(1, 999999),
                'status'=>random_int(0,1),
            ]);
        }
    }
}
