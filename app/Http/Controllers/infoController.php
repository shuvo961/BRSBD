<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;

class infoController extends Controller
{
    public function checkStatus(Request $request){
           $target = registration::find($request->id);


               if($target)
               {
                   if($target->status ==0){
                       return redirect('application-status')->with('message','Status : Pending');
                   } elseif ($target->status == 1){
                       return redirect('application-status')->with('message','Status : Approved');
                   }

               }
               else{
                   return redirect('application-status')->with('message','Please enter valid id');
               }
    }

    public function bInfo(Request $request){

        $target = registration::where('fnid',$request->fnid)
            ->where('fullname',$request->fullname)
            ->where('bdate',$request->bdate)->first();
        if($target){
            if($target->status == 0){
                return redirect('birth-info')->with('message','Application Pending');
            }
            elseif ($target->status == 1){
                return view('front-end.view.view')->with('target',$target);
            }
        }
        else
        {
            return redirect('birth-info')->with('message','Credentials does not match');
        }
    }
}
