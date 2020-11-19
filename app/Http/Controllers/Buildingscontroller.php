<?php

namespace App\Http\Controllers;

use App\Models\building;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Buildingscontroller extends Controller
{
    //
    public function Randomstring($Length=10)
    {
        $string =array("甲","乙","丙","丁","戊","己","庚","辛","壬","癸");
        $randomstring='';

        $randomstring .=$string[rand(0, 9)];

        return $randomstring;
    }
    public  function index()
    {
        $buildings = building::all()->sortBy('id',SORT_ASC);
        return view( 'Buildings.index',['buildings'=>$buildings]);
    }
    public function create()
    {
        $B_name=$this->Randomstring();
        $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
    $building = building::create([
        'B_name'=>$B_name,
        'created_at'=>$random_datetime,
        'updated_at'=>$random_datetime,
    ]);

        return view( 'Buildings.create',$building->toArray());
    }
    public  function show($id)
    {
        $building= building::findOrFail($id)->toArray();
        return view('Buildings.show',$building);
    }
    public  function edit($id)
    {
        $building= building::findOrFail($id)->toArray();
        return view('Buildings.edit',$building);
    }
}
