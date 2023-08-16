<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function frontpage(){
        $title = 'Welcome To Camarines Norte JobZone!';
        //return view('pages.index', compact('title'));
        return view('pages.frontpage')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $title = 'TERMS & CONDITION';
        return view('pages.services')->with('title',$title);
    }

    //pages controller for municipalities
    
    public function paracale()
        {
            $post = Post::all();
            //return view('pages.contact',compact($place));
         //   return view('pages.contact')->with('municipality',$post);
            return view('pages.paracale', compact('post'));
        }
        public function daet()
        {
            $post = Post::all();
            return view('pages.daet', compact('post'));
        }
        public function labo()
        {
            $post = Post::all();
            return view('pages.labo', compact('post'));
        }
        public function talisay()
        {
            $post = Post::all();

            return view('pages.talisay', compact('post'));
        }
        public function sta_elena()
        {
            $post = Post::all();

            return view('pages.sta_elena', compact('post'));
        }
        public function san_lorenzo_ruiz()
        {
            $post = Post::all();

            return view('pages.san_lorenzo_ruiz', compact('post'));
        }
        public function mercedes()
        {
            $post = Post::all();

            return view('pages.mercedes', compact('post'));
        }
        public function san_vicente()
        {
            $post = Post::all();

            return view('pages.san_vicente', compact('post'));
        }
        public function panganiban()
        {
            $post = Post::all();

            return view('pages.panganiban', compact('post'));
        }
        public function capalonga()
        {
            $post = Post::all();

            return view('pages.capalonga', compact('post'));
        }
        public function vinzons()
        {
            $post = Post::all();
            return view('pages.vinzons', compact('post'));
        }
        public function basud()
        {
            $post = Post::all();
            return view('pages.basud', compact('post'));
        }

        public function gmap()
        {
            $title = 'Welcome To GMAP!';
            //return view('pages.index', compact('title'));
            return view('pages.gmap')->with('title', $title);
        }

        public function banking()
        {
            $post = Post::all();
            return view('jobcategory_pages.banking', compact('post'));
        }
        public function construction()
        {
            $post = Post::all();
            return view('jobcategory_pages.construction', compact('post'));
        }
        public function fastfood()
        {
            $post = Post::all();
            return view('jobcategory_pages.fastfood', compact('post'));
        }
        public function manufacturing()
        {
            $post = Post::all();
            return view('jobcategory_pages.manufacturing', compact('post'));
        }
        public function retail()
        {
            $post = Post::all();
            return view('jobcategory_pages.retail', compact('post'));
        }
        public function it()
        {
            $post = Post::all();
            return view('jobcategory_pages.it', compact('post'));
        }
        public function estate()
        {
            $post = Post::all();
            return view('jobcategory_pages.estate', compact('post'));
        }
        public function manpower()
        {
            $post = Post::all();
            return view('jobcategory_pages.manpower', compact('post'));
        }
        public function warehouse()
        {
            $post = Post::all();
            return view('jobcategory_pages.warehouse', compact('post'));
        }
        public function others()
        {
            $post = Post::all();
            return view('jobcategory_pages.others', compact('post'));
        }
        
        

}