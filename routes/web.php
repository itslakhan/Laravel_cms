<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basecontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.app');
// });




Route::get('portfolio', function () {
    return view('layouts.portfolio');
})->name('portfolio.page');


Route::get('team', function () {
    return view('layouts.team');
})->name('team.page');



route::get('home',[basecontroller::class , 'home'])->name('home');
route::get('about',[basecontroller::class , 'about'])->name('about');
route::get('services',[basecontroller::class , 'services'])->name('services');


route::get('adminlogin',[admincontroller::class , 'index'])->name('loginform');
route::post('adminlogin',[admincontroller::class , 'adminlogin'])->name('adminlogin');

route::group(['middleware' =>'auth:admin'],function(){
route::get('content',[admincontroller::class , 'content'])->name('admin.content');
route::post('logout',[admincontroller::class , 'logout'])->name('admin.logout');

route::get('homecontent',[homecontroller::class , 'homecontent'])->name('homecontent');
route::post('homecontent',[homecontroller::class , 'homecontentupdate'])->name('home.update');


});

