@extends('layouts.app')

@section('content')
{{-- <style>
    body{
margin-top: 110px;
 position: relative;
 
 width: 100%;
 height: 1000px;
 background-image: url(/img/jeshoots-com-LtNvQHdKkmw-unsplash.jpg);
 background-repeat: no-repeat;
 background-size: cover;
 }
   * {
     box-sizing: border-box;
     
   }
   
   /* Create four equal columns that floats next to each other */
   .column {

       margin-left: 40px;
       margin-bottom: 20px;
     float: left;
     width: 30%;
     padding: 10px;
     height: 380px; /* Should be removed. Only for demonstration */
     border-width: medium;
 border-color: rgb(3, 187, 187);
 border-radius: 10px;
 border-style: solid;
   }

   ::-webkit-scrollbar {
   width: 0;  /* Remove scrollbar space */
   background: transparent;  /* Optional: just make scrollbar invisible */
}
   
   /* Clear floats after the columns */
   .row:after {
     content: "";
     display: table;
     clear: both;
     
   }
   .row{
       margin-top: 555px;
       width: 100%;
   }

   
 .job_img {

   width:  100px;
   height: 50px;
   background-size: cover;
  
}
h1{
       margin-top: 210px;
       font-style: italic;
    
     text-align: center;
     color:rgb(3, 159, 159);
     font-size: 80px;
     font-family: "Times New Roman", Times, serif ;
   } 
h3{
   background-color: rgb(21, 51, 69);
   text-align: center;
   margin-top: 10px;
   box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2);
 transition: 1.3s;
}
.post_title{
   color:rgb(255, 255, 255);
   text-decoration: none; 
   font-family: "Times New Roman", Times, serif ;
}
.post_title:hover{
     background-color: rgb(3, 187, 187);
     color:rgb(0, 0, 0);
     font-family: "Times New Roman", Times, serif ;
     text-decoration: none;
 
 }
   </style>


<style>
   body {
     font-family: Arial, Helvetica, sans-serif;
   }
   
   .flip-card {
     background-color: transparent;
     width:358px;
     height: 300px;
     perspective: 1000px;
   }
   
   .flip-card-inner {
     position: relative;
     width: 100%;
     height: 100%;
     text-align: center;
     transition: transform 0.6s;
     transform-style: preserve-3d;
     box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   }
   
   .flip-card:hover .flip-card-inner {
     transform: rotateY(180deg);
   }
   
   .flip-card-front, .flip-card-back {
     position: absolute;
     width: 100%;
     height: 100%;
     -webkit-backface-visibility: hidden;
     backface-visibility: hidden;
   }
   
   .flip-card-front {
     background-color: #bbb;
     color: black;
     
   }
   
   .flip-card-back {
     background-color: rgb(239, 237, 237);
     color: rgb(0, 0, 0);
     transform: rotateY(180deg);
     font-size: 25px;
     font-family: "Times New Roman", Times, serif ;
   }
   </style>


<h1><i><b>SEARCH RESULTS</b></i></h1>
@if(count($posts) > 0)
<div class="row">
    @foreach($posts as $post)
                       <div class="column">
                           <h3 ><a class="post_title" href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
                           <div class="flip-card">
                               <div class="flip-card-inner">
                                 <div class="flip-card-front">
                                   
                                   <img class="job_img"  src="/storage/cover_images/{{$post->cover_image}}" style="width:358px;height:300px;">
                                 </div>
                           <div class="flip-card-back">
                               <h3 ><a href="/posts/{{$post->id}}"></a></h3>
                               {{$post->municipality}} 
                               <br>
                               {{--{!! nl2br(e($post->body)) !!} --}}
                               {{-- <br>
                               <small>Written on <br>{{$post->created_at}} <br>by <br> {{$post->user->name}}</small>
                               </div>
                           </div>
                       </div>
                     </div>
                  
    @endforeach
      {{$posts->appends(request()->input())->links()}}
    @else
        <h1> No posts found </h1>
    @endif    --}}






















    <style>
      body{
 margin-top: 110px;
   position: relative;
   
   width: 100%;
   height: 1000px;
   background-image: url(/img/jeshoots-com-LtNvQHdKkmw-unsplash.jpg);
   background-repeat: no-repeat;
   background-size: cover;
   }
     * {
       box-sizing: border-box;
       
     }
     
     /* Create four equal columns that floats next to each other */
     .column {
 
         margin-left: 40px;
         margin-bottom: 20px;
       float: left;
       width: 30%;
       padding: 10px;
       height: 380px; /* Should be removed. Only for demonstration */
       border-width: medium;
   border-color: rgb(3, 187, 187);
   border-radius: 10px;
   border-style: solid;
     }
 
     ::-webkit-scrollbar {
     width: 0;  /* Remove scrollbar space */
     background: transparent;  /* Optional: just make scrollbar invisible */
 }
     
     /* Clear floats after the columns */
     .row:after {
       content: "";
       display: table;
       clear: both;
       
     }
     .row{
         margin-top: 550px;
         width: 100%;
     }
 
     
   .job_img {
 
     width:  100px;
     height: 50px;
     background-size: cover;
    
 }
 h1{
         margin-top: 210px;
         font-style: italic;
      
       text-align: center;
       color:rgb(3, 159, 159);
       font-size: 80px;
       font-family: "Times New Roman", Times, serif ;
     } 
 h3{
     background-color: rgb(21, 51, 69);
     text-align: center;
     margin-top: 10px;
     box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2);
   transition: 1.3s;
 }
 .post_title{
     color:rgb(255, 255, 255);
     text-decoration: none; 
     font-family: "Times New Roman", Times, serif ;
 
 }
 .post_title_scroll{
   overflow: auto;
    
     height: 360px;
     font-size: 20px;
 }
 .post_title:hover{
       background-color: rgb(3, 187, 187);
       color:rgb(0, 0, 0);
       font-family: "Times New Roman", Times, serif ;
       text-decoration: none;
   
   }
     </style>
  
 
 <style>
     body {
       font-family: Arial, Helvetica, sans-serif;
     }
     
     .flip-card {
       background-color: transparent;
       width:358px;
       height: 300px;
       perspective: 1000px;
     }
     
     .flip-card-inner {
       position: relative;
       width: 100%;
       height: 100%;
       text-align: center;
       transition: transform 0.6s;
       transform-style: preserve-3d;
       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
     }
     
     .flip-card:hover .flip-card-inner {
       transform: rotateY(180deg);
     }
     
     .flip-card-front, .flip-card-back {
       position: absolute;
       width: 100%;
       height: 100%;
       -webkit-backface-visibility: hidden;
       backface-visibility: hidden;
     }
     
     .flip-card-front {
       background-color: #bbb;
       color: black;
       
     }
     
     .flip-card-back {
       background-color: rgb(239, 237, 237);
       color: rgb(0, 0, 0);
       transform: rotateY(180deg);
       font-size: 25px;
       font-family: "Times New Roman", Times, serif ;
     }
     </style>
  
   
  <h1><i><b>SEARCH RESULTS</b></i></h1>
  @if(count($posts) > 0)
  <div class="row">
      @foreach($posts as $post)
                         <div class="column">
                         <div class="post_title_scroll">
                               <h3 ><a class="post_title" href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
                         
                               <div class="flip-card">
                                   <div class="flip-card-inner">
                                     <div class="flip-card-front">
                                       
                                       <img class="job_img"  src="/storage/cover_images/{{$post->cover_image}}" style="width:358px;height:300px;">
                                     </div>
                               <div class="flip-card-back">
                                   <h3 ><a href="/posts/{{$post->id}}"></a></h3>
                                   {{$post->municipality}} 
                                   <br>
                                   {{--{!! nl2br(e($post->body)) !!} --}}
                               
                                   <small>Written on <br>{{$post->created_at}} <br>by <br> {{$post->user->name}}</small>
                                   <br>
                                   <a href="/posts/{{$post->id}}"><small>Click here for more details</small></a>
                                   </div>
                               </div>
                           </div>
                         </div>
                       </div>
      @endforeach 
     </div>
     {{$posts->appends(request()->input())->links()}}
  @else
      <p>No posts found</p>
 
  @endif
@endsection