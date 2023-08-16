<?php

namespace App\Http\Controllers; /* remove admin to fix */
 /* new */
 use Illuminate\Support\facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File; /* if the image is updated it will deleted*/
class PostsController extends Controller
{


        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);

    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(15);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role_as == '0'){ 
            return redirect('/posts')->with('error', 'Unauthorized Pages ');
        
        }
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'job_categories' => 'required',
            'municipality' => 'required',
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

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
                // Create Post
                $post = new Post;
                $post->municipality = $request->input('municipality');
                $post->title = $request->input('title');
                $post->job_categories = $request->input('job_categories');
                $post->body = $request->input('body');
                $post->user_id = auth()->user()->id;
                $post->cover_image = $fileNameToStore;
                $post->save();
            if(Auth::user()->role_as == '1'){
            return redirect('admin/adminposts')->with('success', 'Admin Post Created');
            }
            if(Auth::user()->role_as == '2'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Vinzons Admin Post Created');
            }
            if(Auth::user()->role_as == '3'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Talisay Admin Post Created');
            }
            if(Auth::user()->role_as == '4'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Sta Elena Admin Post Created');
            }
            if(Auth::user()->role_as == '5'){
                return redirect('municipalityadmin/adminposts')->with('success', 'San vicente Admin Post Created');
            }
            if(Auth::user()->role_as == '6'){
                return redirect('municipalityadmin/adminposts')->with('success', 'San Lorenzo Admin Post Created');
            }
            if(Auth::user()->role_as == '7'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Paracale Admin Post Created');
            }
            if(Auth::user()->role_as == '8'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Mercedes Admin Post Created');
            }
            if(Auth::user()->role_as == '9'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Labo Admin Post Created');
            }
            if(Auth::user()->role_as == '10'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Panganiban Admin Post Created');
            }
            if(Auth::user()->role_as == '11'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Daet Admin Post Created');
            }
            if(Auth::user()->role_as == '12'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Capalonga Admin Post Created');
            }
            if(Auth::user()->role_as == '13'){
                return redirect('municipalityadmin/adminposts')->with('success', 'Basud Admin Post Created');
            }
 


                return redirect('/posts')->with('success', 'Employer Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !== $post->user_id){
          return redirect('/posts')->with('error', 'Unauthorized Pages ');
        }
        return view('posts.edit')->with('post', $post); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'municipality' => 'required',
            'title' => 'required',
            'body' => 'required',
            'job_categories' => 'required',
     
            
        ]);
        $post = Post::find($id);
        // Handle File Upload
       if($request->hasFile('cover_image')){

            $destination = 'storage/cover_images/'.$post->cover_image;
            if($post->cover_image !== "noimage.jpg")
                if(File::exists($destination)){
                    File::delete($destination);
                }
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
       }

       // Update Post
       $post->municipality = $request->input('municipality');
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->job_categories = $request->input('job_categories');
       if($request->hasFile('cover_image')){
           $post->cover_image = $fileNameToStore;
       }
       $post->save();
       if(Auth::user()->role_as == '1'){
        return redirect('admin/adminposts')->with('success', 'Admin Post Updated');
    }
        if(Auth::user()->role_as == '2'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Vinzons Admin Post Updated');
        }
        if(Auth::user()->role_as == '3'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Talisay Admin Post Updated');
        }
        if(Auth::user()->role_as == '4'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Sta Elena Admin Post Updated');
        }
        if(Auth::user()->role_as == '5'){
            return redirect('municipalityadmin/adminposts')->with('success', 'San vicente Admin Post Updated');
        }
        if(Auth::user()->role_as == '6'){
            return redirect('municipalityadmin/adminposts')->with('success', 'San Lorenzo Admin Post Updated');
        }
        if(Auth::user()->role_as == '7'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Paracale Admin Post Updated');
        }
        if(Auth::user()->role_as == '8'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Mercedes Admin Post Updated');
        }
        if(Auth::user()->role_as == '9'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Labo Admin Post Updated');
        }
        if(Auth::user()->role_as == '10'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Panganiban Admin Post Updated');
        }
        if(Auth::user()->role_as == '11'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Daet Admin Post Updated');
        }
        if(Auth::user()->role_as == '12'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Capalonga Admin Post Updated');
        }
        if(Auth::user()->role_as == '13'){
            return redirect('municipalityadmin/adminposts')->with('success', 'Basud Admin Post Updated');
        }
        return redirect('/posts')->with('success', 'Employer Post Updated');
   }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        
        //Check if post exists before deleting
        if (!isset($post)){
            return redirect('/posts')->with('error', 'No Post Found');
        }

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if($post->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        
        $post->delete();
        return redirect('/home')->with('success', 'Employer Post Removed');
    }


}