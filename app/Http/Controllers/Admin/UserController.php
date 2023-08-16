<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{ 
    public function index()
    {
     
        $users_count = User::orderBy('created_at','desc')->paginate(0);
        
        $users = User::all();
        return view('admin.user.index', compact('users','users_count'));
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        
        $user = User::find($user_id);
        if($user)
        {
            $user->role_as = $request->role_as;
            $user->update();
            return redirect('admin/users')->with('message','Updated Successfully');
        }
            return redirect('admin/users')->with('message','No User Found');
    }

    public function destroy(User $user)
    {
        $posts = Post::where('user_id', $user->id)->pluck('id');
        Post::where('user_id', $user->id)->delete();
        $user->delete();
      
        return redirect('admin/users')->with('success', 'User Removed');
    }

}
