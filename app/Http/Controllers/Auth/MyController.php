<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    public function myLogin(Request $request){
        $request->validate([
           'email'=>'exists:users'
        ]);
        $user=DB::table('users')->where('email','=',$request['email'])->first();
        if($user!=null){
            Auth::loginUsingId(($user->id));
            return(redirect('/home'));
        }
        else{
            return(redirect('/login'));
        }

    }
}
