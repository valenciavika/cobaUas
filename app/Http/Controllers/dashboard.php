<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\ModelS\User;
use Illuminate\Support\Facades\Auth;
use App;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    //
    public function index($locale){
        $user_id = session('user_id');
        App::setLocale($locale);
        return view("dashboard", [
            'user' => User::find($user_id)
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
