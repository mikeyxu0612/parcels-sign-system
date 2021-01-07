<?php

namespace App\Http\Controllers;

use App\Models\parcel;
use App\Models\tenant;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\tenantRequest;

class tenantscontroller extends Controller
{
    //
    public function index()
    {

        $addresses =DB::table('addresses')
            ->orderBy('addresses.id')
            ->select(
                'addresses.id',
            )->get();
        $data = [];
        foreach ($addresses as $address)
        {
            $data["$address->id"] = $address->id;
        }

        $tenants =DB::table('tenants')
            ->orderBy('tenants.id')
            ->select(
                'tenants.id',
                'tenants.T_name',
                'tenants.phone',
                'tenants.A_ID'
            )->get();
        return view('tenants.index',['tenants'=>$tenants, 'addresses'=>$data]);
    }




     public function AddressID(Request $request)
     {
        $tenants = tenant::AddressID($request->input('Adrs'))->get();
         $addresses =DB::table('addresses')
             ->orderBy('addresses.id')
             ->select(
                 'addresses.id',
             )->get();
         $data = [];
         foreach ($addresses as $address)
         {
             $data["$address->id"] = $address->id;
         }
       return view('tenants.index',['tenants'=>$tenants,'addresses'=>$data]);
     }




    public function create()
    {

        return view('tenants.create');
    }


    public function edit($id)
    {
        $tenant =tenant::findOrFail($id);
        return view('tenants.edit',['tenant'=>$tenant]);
    }


    public function show($id)
    {
        $tenant =tenant::findOrFail($id);
        $parcels=$tenant->parcels;
        return view('tenants.show',['tenant'=>$tenant,'parcels'=>$parcels]);
    }



    public function store(tenantRequest $request)
    {
     $T_name=$request->input('T_name');
     $phone=$request->input('phone');
     $A_ID=$request->input('A_ID');
     $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

     tenant::create([
         'T_name'=>$T_name,
         'phone'=>$phone,
         'A_ID'=>$A_ID,
         'created_at'=>$random_datetime,
         'updated_at'=>$random_datetime,
     ]);
        return redirect('tenants');
    }



    public function update($id,tenantRequest $request)
    {
        $tenant = tenant::findOrFail($id);

        $tenant->T_name=$request->input('T_name');
        $tenant->phone=$request->input('phone');
        $tenant->A_ID=$request->input('A_ID');
        $tenant->save();
        return redirect('tenants');
    }




    public function destroy($id)
    {
        $tenant= tenant::findOrFail($id);
        $tenant->delete();
        return redirect('tenants');
    }
}
