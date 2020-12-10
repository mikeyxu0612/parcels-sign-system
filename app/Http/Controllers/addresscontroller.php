<?php

namespace App\Http\Controllers;

use App\Models\address;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $addresses=DB::table('addresses')
            ->join('buildings','addresses.B_ID','=','buildings.id')
            ->orderBy('addresses.id')
            ->select(
                'addresses.id',
                'addresses.address',
                'buildings.B_Name as Bname',
                'addresses.phone'
            )->get();
        return view( ' addresses.index',['addresses'=>$addresses]);
    }
    public function create()
    {
        $buildings=DB::table('buildings')
            ->select('buildings.id','buildings.B_Name')
            ->orderBy('buildings.id','asc')
            ->get();

        $data= [];
        foreach ($buildings as $building)
        {
            $data[$building->id]=$building->B_Name;
        }

        $addresses=DB::table('addresses')
            ->select('addresses.id','addresses.address')
            ->orderBy('addresses.id','asc')
            ->get();

        $datas =[];
        foreach ($addresses as $address)
        {
            $datas[$address->id]=$address->address;
        }
        return view( 'addresses.create',['buildings' =>$data],['addresses'=>$datas]);
    }
  public function edit($id)
{
    $buildings=DB::table('buildings')
        ->select('buildings.id','buildings.B_Name')
        ->orderBy('buildings.id','asc')
        ->get();

    $data=[];
    foreach ($buildings as $building)
    {
        $data[$building->id] = $building->B_Name;
    }

    $addresses=DB::table('addresses')
        ->select('addresses.id','addresses.address')
        ->orderBy('addresses.id','asc')
        ->get();

    $datas =[];
    foreach ($addresses as $addresss)
    {
        $datas[$addresss->id]=$addresss->address;
    }

$address = address::findOrFail($id);

return view('addresses.edit',['address'=>$address,'buildings'=>$data,'addresses'=>$datas]);
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
return redirect('addresses');
}
public function destroy($id)
{
    $address = address::findOrFail($id);
    $address->delete();
    return redirect('addresses');
}

}
