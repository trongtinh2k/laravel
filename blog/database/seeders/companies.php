<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class companies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datanamecty = "";
        for ($i = 0; $i < 10; $i++) {
             $datanamecty=Str::random(5);
           
            DB::table('companies')->insert([
                'company_id' => random_int(1, 999999),
                'company_name'=>$datanamecty,
                'company_web'=>$datanamecty.".webbly.com",
                'company_code'=> "$datanamecty".random_int(1, 999),
                'company_address'=>Str::random(20)."Quận".random_int(1, 10),
                'company_phone'=>random_int(1, 99999999),
                'category_id' => random_int(1, 999999),
                'status'=>random_int(0,1),
            ]);
        }
    }
}
