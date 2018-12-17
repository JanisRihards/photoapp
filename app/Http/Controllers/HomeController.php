<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Auth;

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
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        // return view('home')->with('posts', $user->posts); //Lietotaja home screen redzami lietotaja posti
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // $user_posts = User::all($user_id);

        if(auth()->check() && auth()->user()->admin == 0){
        return view('home')->with('posts', $user->posts);} //Lietotaja home screen redzami lietotaja posti
        if(auth()->check() && auth()->user()->admin == 1){
        
        return view('adminhome')->with('posts', $user->posts);}
    }
    // public function admin(){
            // if(Auth::user()->admin == 0){
            //     return view('home');
            // } else{
            // $users['users'] = \App\User::all();
            // return view('adminhome',$users);
            // }
    // }
}
