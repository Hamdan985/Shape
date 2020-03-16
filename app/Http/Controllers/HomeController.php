<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Customer;
use App\Trainer;
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
    public function index(){
        $gyms = Gym::all();
        $trainers = Trainer::all();
        $customers = Customer::all();
        return view('admin.home')->with('gyms',$gyms)->with('customers',$customers)->with('trainers',$trainers);
    }

    public function gymdetails($gid){
        $gym = Gym::where('gid',$gid)->first();
        $trainers = Trainer::where('gid',$gid)->get();
        $customers = Customer::where('gid',$gid)->get();
        return view('admin.gymdetails')->with('gym',$gym)->with('trainers',$trainers)->with('customers',$customers);
    }

    public function customerdetails($cid){
        $customer = Customer::where('cid',$cid)->first();
        return view('admin.customerdetails')->with('customer',$customer);
    }

    public function trainerdetails($tid){
        $trainer = Trainer::where('tid',$tid)->first();
        return view('admin.trainerdetails')->with('trainer',$trainer);
    }
}
