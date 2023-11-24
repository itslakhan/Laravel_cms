<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function homecontent(){
          $homecontent = Home::first();
        return view('homecontent', compact('homecontent'));
    }

     public function homecontentupdate(Request $request){
          $request->validate([
            'title' => 'required|string',
            'subtitle'=>'required|string',
          ]);

          $data= [
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
        ];

        

        for ($i = 1; $i <= 6; $i++) {
            // Handle file upload for icons
            if ($request->hasFile('icon_' . $i)) {
                $file = $request->file('icon_' . $i);
                $path = $file->store('icons', 'public'); // Assuming you have a public disk configured
                $data['icon_' . $i] = $path;
            }

            $data['icon_title_' . $i] = $request->input('icon_title_' . $i);
        }

  

        Home::updateOrCreate([], $data);


        return redirect()->back();
     }

}
