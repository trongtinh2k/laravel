<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;
class comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
          
          
            DB::table('comment')->insert([
                 'comment_id'=>$i,
                'rating'=>random_int(1,5),
                'comment'=>"Good",
                'user_id'=>random_int(1,9999),
                'diary_days_of_week_id'=> random_int(1,500) ,
               
                'status'=>random_int(0,1),
            ]);
        }
    }
}
