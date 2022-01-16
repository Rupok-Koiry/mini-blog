<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show_post(Request $request)
    {
            /* $posts=Post::paginate(3);
        return view('home',['posts'=>$posts])
         */;
        if (Auth::check()) {
            $userid = $request->user()->id;
            $posts = Post::where('user_id', $userid)->get();
            return view('dashboard', ['posts' => $posts]);
        }
        return view('auth.register');
    }
}
