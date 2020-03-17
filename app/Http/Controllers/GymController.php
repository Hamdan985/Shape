<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Trainer;
use App\Customer;
use App\Membership;
use Auth;
use Illuminate\Http\Request;

class GymController extends Controller
{
    public function __construct(){
        $this->middleware('auth:gym');

    }
    
    public function index(){
        $gid = Auth::user()->gid;
        $trainers = Trainer::where('gid',$gid)->get();
        $customers = Customer::where('gid',$gid)->get();

        return view('gyms.gdashboard')->with('trainers',$trainers)->with('customers',$customers);
    }

    public function profile(){
        return view('gyms.gprofile');
    }

    public function addnew(){
        return view('gyms.addnew');
    }
    public function trainers($gid){
        $trainers = Trainer::where('gid',$gid)->get();
        return view('gyms.gtrainers')->with('trainers',$trainers);
    }

    public function editTrainer($tid){
        $trainer = Trainer::where('tid',$tid)->first();
        return view('gyms.gtrainer-edit')->with('trainer',$trainer);
    }

    public function customers($gid){
        $customers = Customer::where('gid',$gid)->get();
        return view('gyms.gcustomers')->with('customers',$customers);
    }

    public function editCustomer($cid){
        $customer = Customer::where('cid',$cid)->first();
        return view('gyms.gcustomer-edit')->with('customer',$customer);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Gym $gym)
    {
        //
    }

    public function edit(Gym $gym)
    {
        
    }

    public function update(Request $request, $gid){
        $gym = Gym::where("gid", $gid)->first();

        $gym->gname = $request->name;
        $gym->gphone = $request->phone;
        $gym->gaddress = $request->address;
        $gym->gcity = $request->city;
        $gym->email = $request->email; 
        $gym->save();

        return redirect()->back();
    }

    public function destroy(Gym $gym)
    {
        // $gym->delete();
        // return redirect()->back();
    }

    
}
