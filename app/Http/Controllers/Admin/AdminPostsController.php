<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\AdminPostsRequest;
class AdminPostsController extends Controller
{
    public function admin_index()
    {
        // $post = Post::all();
        $post = Post::orderBy('created_at','desc')->paginate(10);
        return view('admin.adminposts.admin_index')->with('post', $post);

        // return view('posts.index')->with('posts', $posts);
    }

    public function admin_create()
    {
        return view('admin.adminposts.admin_create');
    }
    public function admin_store(AdminPostsRequest $request)
    {
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
                
            $post = new Post;
            $post->job_categories = $request->input('job_categories');
            $post->municipality = $request->input('municipality');
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->user_id = auth()->user()->id;
            $post->cover_image = $fileNameToStore;
            $post->save();


      return redirect('/admin/add-adminposts')->with('success', 'Post Createdssss');
    }

    public function admin_edit($id)
    {
        $post = Post::find($id);
        return view('admin.adminposts.admin_edit', compact('post'))->with('success', 'Post Created');
    }
    
    public function admin_destroy($id)
    {
        $post = Post::find($id);         
            //Check if post exists before deleting
            if (!isset($post)){
                return redirect('/posts')->with('error', 'No Post Found');
            }
    
            // Check for correct user 
            if($post->cover_image != 'noimage.jpg'){
                // Delete Image
                Storage::delete('public/cover_images/'.$post->cover_image);
            }
            
            $post->delete();

            return redirect('/admin/adminposts')->with('success', 'Admin Post Removed');
    }
    public function view_manufacturing_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_manufacturing_category', compact('post'));
    }
    public function view_banking_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_banking_category', compact('post'));
    }
    public function view_construction_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_construction_category', compact('post'));
    }
    public function view_fastfood_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_fastfood_category', compact('post'));
    }
    public function view_retail_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_retail_category', compact('post'));
        
    }
    public function view_IT_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_IT_category', compact('post'));
    }
    public function view_realestate_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_realestate_category', compact('post'));
    }
    public function view_manpower_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_manpower_category', compact('post'));
    }
    public function view_warehouse_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_warehouse_category', compact('post'));
    }
    public function view_others_category()
    {
        $post = Post::all();
        return view('admin.adminposts.admin_others_category', compact('post'));
    }
}
 