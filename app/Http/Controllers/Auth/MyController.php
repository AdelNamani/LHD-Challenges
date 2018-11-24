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
        $user=DB::table('users')->where('email','=',$request['email'])->first();
        Auth::loginUsingId(($user->id));
        return(redirect('/home'));
    }
}
