<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\admin;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class admincontroller extends Controller
{
      public function index(){
        return view('login');
      }

      public function adminlogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]) ;
        if (auth()->guard('admin')->attempt($request->only('email', 'password'))) {
            // Authentication successful
            return redirect()->route('content');
        }
            // Authentication failed
           return redirect()->route('loginform')->withErrors(['email' => 'Invalid credentials']);
      }




         public function content(){
          return view('content');
}


   

        public function logout(){
            Auth::guard('admin')->logout();
            return redirect()->route('home');
        }


      
}
