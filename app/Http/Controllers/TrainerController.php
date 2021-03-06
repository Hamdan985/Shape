<?php

namespace App\Http\Controllers;

use App\Trainer;
use App\Gym;
use App\Customer;
use Auth;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function __construct(){
        $this->middleware('auth:trainer',[
            'except' => ['update','destroy']
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tid = Auth::user()->tid;
        $trainer = Trainer::where('tid',$tid)->first();
        $gym = Gym::where('gid',$trainer->gid)->first();

        return view('trainers.tdashboard')->with('trainer',$trainer)->with('gym',$gym);
    }

    public function profile()
    {   
        $gyms = Gym::all();
        return view('trainers.tprofile')->with('gyms',$gyms);
    }
    
    public function customers($gid){
        $customers = Customer::where('gid',$gid)->get();
        return view('trainers.tcustomers')->with('customers',$customers);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tid)
    {
        $trainer = Trainer::where("tid", $tid)->first();

        $trainer->tname = $request->name;
        $trainer->tphone = $request->phone;
        $trainer->taddress = $request->address;
        $trainer->gender = $request->gender; 
        $trainer->tcity = $request->city; 
        $trainer->doj = $request->doj;
        $trainer->email = $request->email; 
        $trainer->pan = $request->pan;
        $trainer->salary = $request->salary;

        if($request->gym == 'None'){
            $trainer->gid = NULL;
        }
        else{
            $mygym = Gym::where('gname', '=', $request->gym)->first();
            if($mygym != NULL){
                $trainer->gid = $mygym->gid;
            }
        }

        $trainer->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return redirect()->back();
    }

    
    
}
