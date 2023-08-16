<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role_as == '14'){ 
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts', $user->posts);
        }
        if(Auth::user()->role_as == '1'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
            }
        if(Auth::user()->role_as == '2'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
             }
        if(Auth::user()->role_as == '3'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
            }
        if(Auth::user()->role_as == '4'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
            }
        if(Auth::user()->role_as == '5'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
            }
        if(Auth::user()->role_as == '6'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
            }
        if(Auth::user()->role_as == '7'){ 
             $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
        }
        if(Auth::user()->role_as == '8'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
        }
        if(Auth::user()->role_as == '9'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
        }
        if(Auth::user()->role_as == '10'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
        }
        if(Auth::user()->role_as == '11'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
        }
        if(Auth::user()->role_as == '12'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
        }
        if(Auth::user()->role_as == '13'){ 
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('home')->with('posts', $user->posts);
        }
            
        else if(Auth::user()->role_as == '0'){
            $post = Post::all();
            return view('home', compact('post'));
        }
    }
    // public function recommendation(){ 
    // $post = Post::all();
    // return view('home', compact('post'));
    // return view('jobcategory_pages.retail', compact('post'));
    // }
}
