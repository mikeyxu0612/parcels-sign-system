<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return string
     */

    public function Randomstring($Length=10)
    {
       $string =array("甲","乙","丙","丁","戊","己","庚","辛","壬","癸");
        $randomstring='';

           $randomstring .=$string[rand(0, 9)];

 return $randomstring;
    }
    public function run()
    {
        //
        for ($i=0;$i<11;$i++)
        {
            $B_name = $this->Randomstring();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('buildings')->insert(
                [
                    'B_Name' => $B_name,
                    'created_at' => $random_datetime,
                    'updated_at' => $random_datetime,
                ]);


        }

    }
}
