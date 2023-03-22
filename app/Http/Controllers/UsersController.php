<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class UsersController extends Controller{


    public function login(Request $request){

        $user = User::where('email', $request->email)->first();

        if($user){
            $credentials = $request->only('email', 'password');
            Auth::attempt($credentials);
        }

        if(Auth::check()){
            return redirect()->route('home')->with('success', 'Дякуємо за Вхід');
        }

        return redirect()->route('home')->with('success', 'Юзера не існує');
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('home')->with('success', 'Дякуємо за Вихід');
    }
}
