<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App;

class signUp extends Controller
{
    public function index($locale){
        App::setLocale($locale);
        return view('signUp');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'fullname' => 'required|min:6'
        ]);

        $validate['password'] = Hash::make($validate['password']);

        // dd($validate);
        User::create($validate);
        return redirect()->intended('login');
    }
}
