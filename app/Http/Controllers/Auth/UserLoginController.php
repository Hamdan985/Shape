<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class UserLoginController extends Controller
{
    
    public function index()
    {
        return view('signin');
    }
    public function store(Request $request)
    {
        //
    }
    public function login(Request $request){

        if($request->role == 'Trainer'){
            $this->validate($request,[
                'phone' => 'required',
                'password' => 'required',
            ]);
    
            if(Auth::guard('trainer')->attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect()->intended('trainers');
            }
    
            return redirect()->back()->withInput($request->only('email'));
        }
    }
}
