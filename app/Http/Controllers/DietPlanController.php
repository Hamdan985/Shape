<?php

namespace App\Http\Controllers;
use App\Trainer;
use App\Gym;
use App\Customer;
use App\DietPlan;

use Auth;
use Illuminate\Http\Request;

class DietPlanController extends Controller
{
    public function __construct(){
        $this->middleware('auth:trainer');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tid = Auth::user()->tid;
        $dietplans = DietPlan::where('tid',$tid)->get();
    
        return view('trainers.viewdiet')->with('dietplans',$dietplans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tid = Auth::user()->tid;
        $trainer = Trainer::where('tid',$tid)->first();
        $gym = Gym::where('gid',$trainer->gid)->first();
        $customers = Customer::where('gid',$gym->gid)->get();

        return view('trainers.setdiet')->with('customers',$customers);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dietplan = new DietPlan;

        $dietplan->morning = $request->morning;
        $dietplan->afternoon = $request->afternoon;
        $dietplan->evening = $request->evening;
        $dietplan->night = $request->night;

        $dietplan->tid = $request->tid;
        $dietplan->cid = $request->cid;

        $dietplan->save();

        return redirect('/trainer/dietplan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dietplan = DietPlan::where('dpid',$id)->first();
        $customer = Customer::where('cid',$dietplan->cid)->first();
        return view('trainers.editdiet')->with('dietplan',$dietplan)->with('customer',$customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dietplan = DietPlan::where('dpid',$id)->first();

        $dietplan->morning = $request->morning;
        $dietplan->afternoon = $request->afternoon;
        $dietplan->evening = $request->evening;
        $dietplan->night = $request->night;

        $dietplan->save();

        return redirect('/trainer/dietplan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dietplan = DietPlan::where('dpid',$id)->first();
        $dietplan->delete();
        return redirect()->back();
    }
}
