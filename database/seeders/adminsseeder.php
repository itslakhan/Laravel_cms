<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\admin;

class adminsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
         $admin= new admin;
         $admin->email='makham@gmail.com';
         $admin->password= Hash::make('12345');
         $admin->save();

        
    }
}
