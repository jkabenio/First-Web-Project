@extends('layouts.app')

@section('content')



<style>
  h1{
      margin-top: 20%;
      font-style: italic;
   
    text-align: center;
    color:rgb(3, 159, 159);
    font-size: 80px;
    font-family: "Times New Roman", Times, serif ;
  } 
  body{
margin-top: 110px;
  position: relative;
  
  width: 100%;
  height: 100%;
  background-image: url(/img/jess-bailey-q10VITrVYUM-unsplash.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  }
  .job_img {
    float: left;
    width:  100px;
    height: 400px;
    background-size: cover;
    border-style: solid;
border-width: medium;
border-color: rgb(3, 187, 187);
border-radius: 10px;
    
}

.postdiv{
    text-align: center;
   width: 100%;
   
}
.img_uploads{
    position: static;

}
.job_body{
    font-family: "Times New Roman", Times, serif;
    position: static;
    color:rgb(0, 0, 0);
    background-color:rgb(239, 237, 237);
    border-style: solid;
border-width: medium;
border-color: rgb(3, 187, 187);
border-radius: 10px;
overflow: auto;
     height: 400px;
     font-size: 15px; 
}
h3{
  background-color: rgb(21, 51, 69);
  text-align: center;
  margin-top: 10px;
  box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2);
transition: 1.3s;
}
.job_title{
  color:rgb(255, 255, 255);    
  text-decoration: none;     
}
.job_title:hover{
    background-color: rgb(3, 187, 187);
    color:rgb(0, 0, 0);
    font-family: "Times New Roman", Times, serif ;
    text-decoration: none;

}
.post_page{
  
  /*height: 550px;
  overflow: auto;*/
  border-color: rgb(3, 187, 187);
  width: 95%;
  margin-left: 30px;
/*  border-style: solid;
border-width: medium; */
margin-top: 610px;
}
::-webkit-scrollbar {
  width: 0;  /* Remove scrollbar space */
  background: transparent;  /* Optional: just make scrollbar invisible */
}
.row{
  width: 90%;
 
  margin-left: 60px;
  border-color: black;
}


 </style>
 
 <h1><b>OTHER SERVICES</b></h1>

 <div class="post_page">


        @foreach ($post as $item)
            <tr>
                @if($item->job_categories == "OTHER")
                    <div class="postsdiv">
            <div class="row">
                <div class="img_uploads col-md-4 col-sm-4">
                     <img class="job_img" style="width:100%" src="/storage/cover_images/{{$item->cover_image}}">
                </div>
                <div class="job_body col-md-8 col-sm-8">
                     <h3 ><a class="job_title" href="/posts/{{$item->id}}"> {{$item->title}}</a></h3>
                     {{$item->municipality}} 
                     <br>
                     {!! nl2br(e($item->body)) !!}
                     <br>
                     <small>Written on {{$item->created_at}} by {{$item->user->name}}</small>
                </div>
               
            </div>
            <br>
        </div>
                @endif               
            </tr>        
        @endforeach
    </tbody>
</table>
</div>
<br>
  @endsection