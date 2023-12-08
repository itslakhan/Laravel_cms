<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Notifications\AdminLoginNotification;
use Illuminate\Support\Facades\Notification;
use App\Mail\AdminLoginMail;
use Illuminate\Support\Facades\Mail;

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
            
            $user= auth()->guard('admin')->user();

            Mail::to($user->email)->send(new AdminLoginMail($user));


                // dd('done');
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
            return redirect()->route('loginform');
        }

// public function AdminEmail(){
            
//             return view('Emails.admin_login_mail');
//         }


      
}
