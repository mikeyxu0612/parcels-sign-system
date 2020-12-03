<?php

namespace App\Http\Controllers;

use App\Models\address;
use Carbon\Carbon;
use Illuminate\Http\Request;

class addresscontroller extends Controller
{
    //
    public function generatestring($length =10)
    {
        $numbers='0123456789';
        $randomstring='';
        $numbersLength=strlen($numbers);
        for($i=0;$i<4;$i++)
            $randomstring .=$numbers[rand(0,$numbersLength-1)];
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
    public  function index()
    {
        $addresses = address::all()->sortBy('id',SORT_ASC);
        return view( ' addresses.index',['addresses'=>$addresses]);
    }
    public function create()
    {
/*
       $address=$this->generateRandomAddress();
       $B_ID=$this->generateRandomBID();
        $phone=$this->generateRandomphone();
        $random_datetime = Carbon::now()->subMinutes(rand(1, 55));


        $addresses  = address::create([
         'address'=>$address,
            'B_ID'=>$B_ID,
            'phone'=>$phone,
            'created_at'=>$random_datetime,
            'updated_at'=>$random_datetime

        ]);*/
        return view( 'addresses.create');
    }
  public function edit($id)
{
$address = address::findOrFail($id)->toArray();
return view('addresses.edit',$address);
 }

public function show($id)
{
    $address = address::findOrFail($id)->toArray();
    return view('addresses.show',$address);
}

public function store(Request $request)
{

 $address=$request->input('address');
 $B_ID=$request->input('B_ID');
 $phone=$request->input('phone');
 $random_datetime = Carbon::now()->subMinutes(rand(1,55));

 address::create([
     'address'=>$address,
     'B_ID'=>$B_ID,
     'phone'=>$phone,
     'created_at'=>$random_datetime,
     'updated_at'=>$random_datetime
 ]);
return redirect('addresses');
}
public function update($id,Request $request)
{

 $address = address::findOrFail($id);
 $address->address=$request->input('address');
 $address->B_ID=$request->input('B_ID');
 $address->phone=$request->input('phone');
$address->save();
return 'OK';
}
}
