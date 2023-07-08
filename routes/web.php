<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ResepController;
use App\Models\Resep;

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

Auth::routes();

Route::get('/', function () {
    if(Auth::id()){
        $resep = Resep::select('*')->latest()->get();
        return view('home', compact('resep'));
    }else{
        return view('auth.login');
    }
});

Route::resource('/resep', ResepController::class)->middleware('auth');
