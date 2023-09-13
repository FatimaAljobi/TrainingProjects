<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function show(User $user){
    //     return view("user",compact('user'));
    // }

    public function index(){
        $users = User::all();
        return view('index',compact('users'));
    }


}
