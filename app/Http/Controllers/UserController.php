<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'bu userlani royxati';
    }

    public function show($user){

        $user +=1000;
        //return 'tanlangan user: ' . $user;
        //return view('users.show ' , ['name' => 'Mohir' , 'id' => $user ] );
        // yoki bu pastdigi
        return view('users.show')->with('name' ,'Mohir')
        ->with('id' ,  $user );
    }

    public function create(){
        return view('users.create');
    }

    public function edit($user_id){
    return $user_id . ' ni ozgartirish';
    }
}
