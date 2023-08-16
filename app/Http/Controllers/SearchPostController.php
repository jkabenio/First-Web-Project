<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchPostController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'query'=>'required|min:3',
        ]);
        $query = $request->input('query');
        //dd($query);
        $posts  = Post::where('title','like', "%$query%")->orwhere('body','like',"%$query%")->orwhere('municipality','like',"%$query%")->paginate(10);
        //dd($posts);
        return view('posts.search', compact('posts')); 
    }
}
