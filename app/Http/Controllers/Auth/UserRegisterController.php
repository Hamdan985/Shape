<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

use App\Trainer;
use App\Gym;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserRegisterController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $request->validate([
                'password'=>'required|min:8',
        ]);

        //Trainer Register
        if($request->role == 'Trainer'){
            $trainer = new Trainer;
            $trainer->tname = $request->name;
            $trainer->tphone = $request->phone;
            $trainer->taddress = $request->address; 
            $trainer->email = $request->email; 
            $trainer->password = Hash::make($request->password); 

            $trainer->save();

            return redirect('trainers');
        }

        //Customer Register
        if($request->role == 'Customer'){
            $customer = new Customer;
            $customer->cname = $request->name;
            $customer->cphone = $request->phone;
            $customer->caddress = $request->address; 
            $customer->email = $request->email; 
            $customer->password = Hash::make($request->password); 

            $customer->save();

            return redirect('customers');
        }

        //Gym Register
        if($request->role == 'Gym'){
            $gym = new Gym;
            $gym->gname = $request->name;
            $gym->gphone = $request->phone;
            $gym->gaddress = $request->address; 
            $gym->email = $request->email; 
            $gym->password = Hash::make($request->password); 

            $gym->save();

            return redirect('gyms');
        }
    }
}
