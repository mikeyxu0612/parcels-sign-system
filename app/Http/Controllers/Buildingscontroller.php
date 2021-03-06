<?php

namespace App\Http\Controllers;

use App\Models\building;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\BuildingRequest;


class Buildingscontroller extends Controller
{
    //
    public function index()
    {
        $buildings = building::all()->sortBy('id', SORT_ASC);
        return view('Buildings.index', ['buildings' => $buildings]);
    }


    public function create()
    {

        return view('Buildings.create');
    }


    public function show($id)
    {
        $building = building::findOrFail($id);
        return view('Buildings.show', ['building'=>$building]);
    }


    public function edit($id)
    {
        $building = building::findOrFail($id);
        return view('Buildings.edit', ['building' => $building]);
    }


    public function store(BuildingRequest $request)
    {
        $B_Name = $request->input('B_Name');
        $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
        building::create([
            'B_Name' => $B_Name,
            'created_at' => $random_datetime,
            'updated_at' => $random_datetime]);
        return redirect('Buildings');
    }


    public function update($id, BuildingRequest $request)
    {
        $building = building::findOrFail($id);

        $building->B_Name = $request->input('B_Name');
        $building->save();
        return redirect('Buildings');
    }


    public function destroy($id)
    {
        $Building = building::findOrFail($id);
        $Building->delete();
        return redirect('Buildings');
    }


   public function api_Buildings()
   {
       return building::all();
   }


   public function api_delete(Request $request)
   {
       $building = building::find($request->input('id'));

       if($building == null)
       {
           return response()->json(['status'=>0,]);

       }

       if($building->delete())
       {
           return  response()->json(['status'=>1,]);
       }
   }


   public function api_update(Request $request)
   {
    $building = building::find($request->input('id'));
       if ($building == null)
       {
           return response()->json(['status'=>0,]);
       }
       $building->B_Name = $request->input('B_Name');
       if($building->save())
       {
           return  response()->json(['status'=>1,]);
       }else{
           return  response()->json(['status'=>0,]);
       }
   }


}
