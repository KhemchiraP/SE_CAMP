<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::resource('titles', C_titles::class);

Route::get('/my-controller1',[MyController::class,'index'] );
Route::get('/my-controller', 'App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller2','Mycontroller@index');
});
Route::resource('/my-controller3', MyController::class);

Route::get('/my-controller',[MyController::class,'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/my-route',function(){
    $data=['val_a'=>'Hello World'];
    $data['val_b']="Laravel";
    return view('mypage',$data);
});
Route::post('/my-route',function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('myroute',$data);

});
