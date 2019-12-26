<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Gym;
use App\Membership;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth:customer',[
            'except' => ['update','destroy','findgyms']
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customers.cdashboard');
    }
    public function profile()
    {
        $gyms = Gym::all();
        return view('customers.cprofile')->with('gyms',$gyms);
    }

    public function findgyms(){
        $gyms = Gym::all();
        $memberships = Membership::all();
        return view('findgyms')->with('gyms',$gyms)->with('memberships',$memberships);
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
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cid)
    {
        $customer = Customer::where("cid", $cid)->first();

        $customer->cname = $request->name;
        $customer->cphone = $request->phone;
        $customer->caddress = $request->address;
        $customer->gender = $request->gender; 
        $customer->doj = $request->doj;
        $customer->email = $request->email; 
        $customer->reference = $request->reference; 
        $customer->balance = $request->balance;

        if($request->gym == 'None'){
            $customer->gid = NULL;
        }
        else{
            $mygym = Gym::where('gname', '=', $request->gym)->first();
            if($mygym != NULL){
                $customer->gid = $mygym->gid;
            }
        }
        
        $customer->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->back();
    }
    
    
}
