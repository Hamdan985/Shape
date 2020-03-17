<?php

namespace App\Http\Controllers;

use App\Admission;
use App\Membership;
use App\Customer;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

use Carbon\Carbon;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $cid = $request->cid;
        $admission = Admission::where('cid',$cid)->first();

        if($admission == NULL){

            $mid = $request->type;
    
            $add = new Admission;
            $membership = Membership::where('mid',$mid)->first();
    
            $c = Customer::where('cid',$request->cid)->first();
            $c->gid = $membership->gid;
            $c->doj = $request->startdate;
            $c->balance  = $membership->fees;
    
            $add->mid = $mid;
            $add->cid = $request->cid; 
            $add->startdate = $request->startdate;
    
            $sd = Carbon::create($request->startdate);
    
            if($membership->duration == '1 Month'){
                $add->enddate = $sd->addDays(30);
            }
            if($membership->duration == '3 Months'){
                $add->enddate = $sd->addDays(90);
            }
            if($membership->duration == '12 Months'){
                $add->enddate = $sd->addDays(365);
            }
            
            $add->status = 'active';
            
            $add->save();
            $c->save();
    
    
            return redirect('/customers');
        }
        else{
            $errors = new MessageBag(['membership' => ['Please complete or remove the current membership to proceed further.']]);
            return redirect()->back()->withErrors($errors);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        $admission->delete();
        return redirect()->back();
    }
}
