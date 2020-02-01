<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminLoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest:admin');
    }


    public function showLoginForm(){

        return view('auth.admin-login');
    }

    public function login(Request $request){

        //Validate the form data
    $this->validate($request, [

       'email' =>'required|email',
        'password' =>'required|min:6'

     ]);

        //Attempt to log the user in
        //Attempt function automatically hashes the password
    if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
        //If succesful, then redirect to their intended location
        return redirect()->intended(route('admin.admin-dashboard'));
    }
        //If not succesful, redirect back to login with the form data
    return redirect()->back()->withInput($request->only('email', 'remember'));






    }
}
