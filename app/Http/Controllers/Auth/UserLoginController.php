<?php


namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Auth;

class UserLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:trainer');
        $this->middleware('guest:customer');
        $this->middleware('guest:gym');
    }
    
    public function index()
    {
        return view('signin');
    }

    public function login(Request $request){

        $this->validate($request,[
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);
        
        $errors = new MessageBag;

        //Trainer Login
        if($request->role == 'Trainer'){
            
            if(Auth::guard('trainer')->attempt(['tphone' => $request->phone, 'password' => $request->password])){
                return redirect()->intended('trainers')->with('alert-success', 'You are now logged in.');
            }
            $errors = new MessageBag(['password' => ['Invalid phone or password.']]);
            return redirect()->back()->withErrors($errors);
        }

        //Customer Login
        if($request->role == 'Customer'){
            
            if(Auth::guard('customer')->attempt(['cphone' => $request->phone, 'password' => $request->password])){
                return redirect()->intended('customers');
            }
    
            $errors = new MessageBag(['password' => ['Invalid phone or password.']]);
            return redirect()->back()->withErrors($errors);
        }

        //Gym Login
        if($request->role == 'Gym'){
    
            if(Auth::guard('gym')->attempt(['gphone' => $request->phone, 'password' => $request->password])){
                return redirect()->intended('gyms');
            }
    
            $errors = new MessageBag(['password' => ['Invalid phone or password.']]);
            return redirect()->back()->withErrors($errors);
        }

    }
}
