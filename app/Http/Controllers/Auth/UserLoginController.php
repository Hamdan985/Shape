<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserLoginController extends Controller
{
    public function __construct(){
        // $this->middleware('guest:trainer');
        // $this->middleware('guest:customer');
        // $this->middleware('guest:gym');
    }
    
    public function index()
    {
        return view('signin');
    }

    
    public function login(Request $request){

        $this->validate($request,[
            'phone' => 'required',
            'password' => 'required',
        ]);

        if($request->role == 'Trainer'){
            
            if(Auth::guard('trainer')->attempt(['tphone' => $request->phone, 'password' => $request->password])){
                return redirect()->intended('trainers');
            }
            
            return redirect()->back()->withInput($request->only('phone'));

        }
        if($request->role == 'Customer'){
    
            if(Auth::guard('customer')->attempt(['cphone' => $request->phone, 'password' => $request->password])){
                return redirect()->intended('customers');
            }
    
            return redirect()->back()->withInput($request->only('phone'));
        }
        if($request->role == 'Gym'){
    
            if(Auth::guard('gym')->attempt(['gphone' => $request->phone, 'password' => $request->password])){
                return redirect()->intended('gyms');
            }
    
            return redirect()->back()->withInput($request->only('phone'));
        }

    }
}
