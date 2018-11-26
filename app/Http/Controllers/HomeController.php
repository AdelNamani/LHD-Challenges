<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $you=User::all()->where('id','=',Auth::id())->first();
        $users=User::all()->all();
        $i=0;
        foreach ($users as $user){
            $user['score']=$user->getScore();
            if ($user->getScore()==0) unset($users[$i]);
            $i++;
        }
        //dd($users);
        $array = collect($users)->sortBy('score')->reverse()->toArray();
        if (isset($result)){

            return view('home',['userScore'=>$you->getScore(),'users'=>$array,'result'=>$result]);
        }else{
            return view('home',['userScore'=>$you->getScore(),'users'=>$array]);
        }

    }

    public function validateFlag(Request $request){
        $you=User::all()->where('id','=',Auth::id())->first();
        $challenge=Challenge::all()->where('flag','=',$request['flag'])->first();
        if ($challenge!=null){
            if(!($you->validatedChallenge($challenge))){
                $you->challenges()->attach($challenge->id);
                return redirect()->action('HomeController@index',array('result'=>'true'));
            }
            else{
                return redirect()->action('HomeController@index',array('result'=>'exist'));
            }

        }
        else{
            //return Redirect::route('home')->with('result','false');
            return redirect()->action('HomeController@index',array('result'=>'false'));
        }

    }

}
