<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return string
     */
    public function generatestring($length =10)
    {
        $numbers='0123456789';
        $numbersLength=strlen($numbers);
        $randomstring='';
        for($i=0;$i<4;$i++)
        {
        $randomstring .=$numbers[rand(0,$numbersLength - 1)];
        }
        return $randomstring;
    }
    public function generateRandomAddress()
    {
         $address =['A01','A02','B01','B02','C01','C02','D01','D02','E01','E02','F01','F02'];
         return $address[rand(0,count($address)-1)];
    }
    public function generateRandomBID()
    {
        $B_id=['1','2','3','4','5'];
        return $B_id[rand(0,count($B_id)-1)];
    }
    public function generateRandomphone()
    {
        $first_number =$this->generatestring(rand(0,5));
        $last_number =$this->generatestring(rand(5,9));
        $phone =$first_number . $last_number;
        return $phone;
    }
    public function run()
    {
        //
      for ($i=0;$i<60;$i++)
      {
          $address=$this->generateRandomAddress();
          $B_ID=rand(1,10);
          $phone=$this->generateRandomphone();
          $random_datetime=Carbon::now()->subMinutes(rand(1,55));

          DB::table('addresses')->insert([
             'address'=>$address,
              'B_ID'=>$B_ID,
              'phone'=>$phone,
              'created_at' =>$random_datetime,
              'updated_at'=>$random_datetime,
          ]);
      }
    }
}
