<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test-route' , [Controller::class , 'action']);

//Route::get('/test-route' , function (){
//
//    //return ['success' => 'muvaffaqqiyatli'];
//    //yoki
//    //return 'muvaffaqqiyatli';
//
//    return view('test');
//
//});

Route::view('/test-route' , 'test');


//Route::get('/users/{id}/photo/{photo_id}', function ($id, $photo_id){
//
//    return 'siz tanlagan user id bu:' .  $id . ' siz tanlagan photo:' . $photo_id;
//});

Route::get('/users/{id?}', function ($id = null){

    return 'siz tanlagan user id bu:' .  $id ;
});




// post brauzerga jonatomisz

Route::post('contact', function (){
    return 'post route';
});



//boshqa sahifaga jonatish


Route::redirect('/birinchi', 'ikkinchi');
Route::get('ikkinchi', function (){
    return 'ikkinchi route';
});
