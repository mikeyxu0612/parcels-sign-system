<?php

namespace App\Http\Controllers;

use App\Models\parcel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class parcelscontroller extends Controller
{
    //
    public function generateRandomfirststring($length=10)
    {
        $firststring=array("陳","林","黃","張","李","王","吳","劉","蔡","楊","許","鄭","謝","郭","洪","曾","邱","廖","賴");
        $randomfirst='';
        $randomfirst .= $firststring[rand(0,18)];
        return $randomfirst;
    }

    public function generateRandomsecondstring($length=10)
    {
        $secondstring=array("怡","珠","文","婷","雅","佳","君","俊","嘉","家","宏");
        $randomsecond='';
        $randomsecond .=$secondstring[rand(0, 9)];
        return $randomsecond;
    }
    public function generateRandomlaststring($length=10)
    {
        $laststring=array("珠","芃","杏","川","梓","武","苑","藝","孜","然");
        $randomlast='';
        $randomlast .= $laststring[rand(0,9)];
        return $randomlast;
    }
    public function generateRandomsignproof()
    {
        $first_name =$this->generateRandomfirststring(rand(2,15));
        $second_name=$this->generateRandomsecondstring(rand(2,10));
        $last_name=$this->generateRandomlaststring(rand(2,10));
        $sign_proof=$first_name.$second_name.$last_name;
        return  $sign_proof;
    }
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
    public function generateRandomAID()
    {
        $first_number=$this->generatestring(rand(0,7));
        $second_number=$this->generatestring(rand(0,10));
        $A_ID=$first_number.$second_number;
        return $A_ID;
    }
    public function generateRandomsign()
    {
        $name=$this->generateRandomsignproof();
        $sign=false;
        if($name=null)
        {
            $sign=false;
        }
        else
        {
            $sign=true;
        }
        return $sign;
    }


        public  function index()
    {
        /* $parcels =parcel::all()->sortBy('id',SORT_ASC);*/
        $parcels =DB::table('parcels')
            ->orderBy('parcels.id')
            ->select(
                'parcels.id',
                'parcels.A_ID',
                'parcels.sign',
                'parcels.Sign_proof'
            )->get();
        return view( 'parcels.index',['parcels'=>$parcels]);
    }

    public function create()
    {
       /* $A_ID=$this->generateRandomAID();
        $sign=$this->generateRandomsign();
        $sign_proof=$this->generateRandomsignproof();
        $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

        $parcel =parcel::create([
            'A_ID'=>$A_ID,
            'sign'=>$sign,
            'Sign_proof'=>$sign_proof,
            'created_at'=>$random_datetime,
            'updated_at'=>$random_datetime,
        ]);*/
        return view('parcels/create');
    }
    public  function show($id)
    {
         $parcel =parcel::findOrFail($id)->toArray();
         return view('parcels.show',$parcel);
    }

    public  function edit($id)
    {
        $parcel =parcel::findOrFail($id)->toArray();
        return view('parcels.edit',$parcel);
    }
    public function store(Request $request)
    {
      $sign=$request->input('sign');
      $sign_proof=$request->input('Sign_proof');
      $A_ID=$request->input('A_ID');
        $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

        $parcel =parcel::create([
            'A_ID'=>$A_ID,
            'sign'=>$sign,
            'Sign_proof'=>$sign_proof,
            'created_at'=>$random_datetime,
            'updated_at'=>$random_datetime,
        ]);
        return redirect('parcels');
    }

    public function update($id,Request $request)
    {
        $parcel = parcel::findOrFail($id);

        $parcel->sign=$request->input('sign');
        $parcel->Sign_proof=$request->input('Sign_proof');
        $parcel->A_ID=$request->input('A_ID');
        $parcel->save();
        return redirect('parcels');

    }
    public function destroy($id)
    {
       $parcel = parcel::findOrFail($id);
        $parcel->delete();
        return redirect('parcels');
    }
}

