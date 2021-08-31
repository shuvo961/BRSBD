<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Registraion;
use App\Models\registration;
use App\Models\Regmodel;
use App\Models\Upazila;
use Illuminate\Http\Request;
use DB;


class RegController extends Controller
{
    public function newreg(){
        $div = DB::table('divisions')->pluck("name","id");
        return view('front-end.registration.registration',compact('div'));
    }

    public function confirm(Request $request){
        $div = Division::find($request->division);
        $dis = District::find($request->district);
        $upa = Upazila::find($request->upazila);
        return view('front-end.registration.confirm',['data'=>$request,'div'=>$div,'dis'=>$dis,'upa'=>$upa]);
    }

    public function success(Request $request){
        $reg = registration::create($request->all());
        $id = $reg->id;
        $fullname=  $request->fname.' '.$request->lname;
        $reg->fullname = $fullname;
        $reg->save();
        return view('front-end.registration.success',['id'=>$id]);
    }

    public function district($id){
        $districts = DB::table("districts")->where("division_id",$id)->pluck("name","id");
        return json_encode($districts);
    }
    public function upazila($id){
        $upazilas = DB::table("upazilas")->where("district_id",$id)->pluck("name","id");
        return json_encode($upazilas);
    }
}
