<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
          
          
           DB::table('courses')->insert([
                'course_id'=>$i,
               'class_id'=>random_int(1,999),
               'course_name'=>"Lập trình ".random_int(1,10),
               'teacher_id'=> random_int(1,500) ,
              
               'status'=>random_int(0,1),
           ]);
       }
    }
}
