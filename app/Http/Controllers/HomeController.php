<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view ('admin.dashboard.dashboard');
    }

    public function applicants(){
        $applicants = registration::where('status','0')->get();

        return view ('admin.applicants.applicant',['applicants'=>$applicants]);
    }

    public function viewApplicant($id){
        $applicant = registration::find($id);
        return view ('admin.applicants.applicant-details',['apl'=>$applicant]);
    }
    public function approveApplicant($id){
        $applicant = registration::find($id);
        $applicant->status = 1;
        $applicant->save();
        return redirect('new-applicants')->with('message','Applicant Approved');

    }
    public function declineApplicant($id){
        $applicant = registration::find($id);
        $applicant->delete();
        return redirect('new-applicants')->with('message','Applicant Declined');
    }
    public function citizens(){
        $citizens = registration::all();
        return view ('admin.citizens',['applicants'=>$citizens]);

    }

}
