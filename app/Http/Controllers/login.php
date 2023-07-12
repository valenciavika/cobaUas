<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App;

class login extends Controller
{
    //
    public function index($locale){
        App::setLocale($locale);
        return view('login');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6',
        ]);
        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            // $user->User::where('email', $validate['email'])->first();
            $user = Auth::user();
            $request->session()->put('user_id', $user['id']);
            return redirect()->intended('dashboard');
        }
        return back()->with('LoginError', 'No Credential Match! Please sign up if you dont have any account');;
    }
}
