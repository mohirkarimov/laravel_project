<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'bu userlani royxati';
    }

    public function show($user){
        return 'tanlangan user: ' . $user;
    }

    public function create(){
        return view('users.create');
    }

    public function edit($user_id){
    return $user_id . ' ni ozgartirish';
    }
}
