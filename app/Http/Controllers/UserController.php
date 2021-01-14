<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function show(User $user){
        return view('user.show',compact(['user']));
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|email|unique:users,email|max:200',
            'password'=>'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        
        session()->flash('success',"开启您的使用之旅。");

        return redirect()->route('user.show',compact('user'));
    }
    
}
