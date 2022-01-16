<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show_post(Request $request){
        $userid=$request->user()->id;
        $posts=Post::where('user_id',$userid)->get();
        return view('dashboard',['posts'=>$posts]);
    }
}
