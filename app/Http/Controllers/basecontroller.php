<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class basecontroller extends Controller
{
     public function home(){
      $homeContent = Home::first(); // Assuming you have only one record for the home page

      if (!$homeContent) {
          // Handle the case where no record is found (optional)
          return view('layouts.home', ['homeContent' => null]);
      }

      return view('home', ['homeContent' => $homeContent]);
     }

     public function services(){
        return view('services');
     }

     public function about(){
        return view('about');
     }
}
