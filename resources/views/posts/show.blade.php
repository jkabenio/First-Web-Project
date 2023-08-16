@extends('layouts.app')

@section('content')


<!--<style>
 .btn{
   margin-top: calc(5vh + 5px);
  word-break: keep-all;
word-wrap: break-word;
 } 

</style>-->
<style>
    h1{
        
        font-style: italic;
        background-color: rgb(21, 51, 69);
        width: 88%;
        margin-left: 67px;
        
      text-align: center;
      color:rgb(0, 255, 255);
      font-size: 40px;
      font-family: "Times New Roman", Times, serif ;
    } 
.job_img{
    float: left;
    width:  10px;
    height: 400px;
    background-size: cover;
    background-color: rgb(0, 0, 0);
}

  .body_post{
    background-color: rgb(239, 237, 237);
    font-family: "Times New Roman", Times, serif;
    border-style: solid;
  border-width: medium;
  border-color: rgb(3, 187, 187);
  border-radius: 10px;
  margin-left: 380px;
  width: 800px;
      height: 400px;
      overflow: auto;
     font-size: 15px;  
  }
  .main-post{
      margin-top: 100px;
  }
  .job_img {
      float: left;
      width: 300px;
      height: 400px;
      margin-left: 50px;
      border-style: solid;
  border-width: medium;
  border-color: rgb(3, 187, 187);
  border-radius: 10px;
      
  }
  .btn{
      margin-top: 5px;
    margin-left: 65px;
    text-align: center;
    width: 1113px;
    background-color: rgb(21, 51, 69);
    color: rgb(255, 255, 255);
}
.muni_position{

font-size: 20px;
}
</style>
<div class="main-post">
    
    <h1>{{$post->title}}</h1>
    <div class="col-md-4 col-sm-4">
        <img class="job_img"  src="/storage/cover_images/{{$post->cover_image}}">
    </div>
    <div>
    <div class="body_post">
        
        <div class="muni_position"><b>{{$post->municipality}}</b></div>
        <br>
        {!! nl2br(e($post->body)) !!}
        <br>
    <small>Written on {{$post->created_at}}</small>
  
</div>
<a href="/posts" class="btn btn-primary">Go Back</a>
</div>    
    @if(!Auth::guest())
        <!--For Employee/employer acccess -->
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>

            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => "btn btn-danger"])}}
            {!!Form::close()!!}
        @endif
         {{-- For Admin acccess  --}}
         @if(Auth::user()->role_as == '11')
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">apply</a>

        @endif
    @endif
    <br> <br> <br> <br> <br>
@endsection