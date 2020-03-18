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

        return view('trainers.dietplan')->with('customers',$customers);
        
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

        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
