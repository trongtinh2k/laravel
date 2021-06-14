<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class classes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection = collect([2012,2015,2014,2013,2019,2020,2013]);
        for ($i = 0; $i < 10; $i++) {
            DB::table('classes')->insert([
                'class_id' => random_int(1, 9999),
                'class_name' => Str::random(40),
                'year_school' =>$collection->random(),
                 'teacher_id'=>random_int(1,1000),
                'status'=>random_int(0,1),
            ]);
        }
    }
}
