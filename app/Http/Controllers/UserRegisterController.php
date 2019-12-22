<?php

namespace App\Http\Controllers;
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
    }
}
