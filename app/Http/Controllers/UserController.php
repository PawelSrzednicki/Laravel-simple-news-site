<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Show user profile information.
     *
     */
    public function show(){
       $user = Auth::user();
       return view('user.profile')->with('user', $user);
    }
    
    /**
     * Show news belonging to selected user.
     *
     */
    public function showNewsByUser($user){

         $user = User::select('id')->where('name', $user)->first();

        $data = News::where('user_id', $user->id)->get();
        return view('news.byUser')->with('data', $data);
    }
    
     /**
     * Show news belonging to authenticated user.
     *
     */
    public function showNewsOfAuthUser(){

        $user = Auth::user();
        
        $data = News::where('user_id', $user->id)->get();
        return view('user.authUserPosts')->with('data', $data);
    }

}
