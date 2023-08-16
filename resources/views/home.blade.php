@extends('layouts.app')

@section('content')
<style>
.post-created{
    margin-top: 100px;
    border-style: solid;
  border-width: medium;
  border-color: rgb(3, 187, 187);
  margin-left: 180px;
  width: 900px;
  height: 100%;
  font-family: "Times New Roman", Times, serif;
  margin-bottom: 20px;
}
h3{
    margin-top: 10px;
    background-color: rgb(21, 51, 69);
    border-style: solid;
  border-width: medium;
  border-color: rgb(3, 187, 187);
    text-align: center;
    color: aliceblue;
}
.job-posted{
    width: 100%;
}
.create_btn{
    margin-top: 10px; 
    margin-left: 460px;
}

</style>
@if(Auth::user()->role_as != '0')
<div class="post-created">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="well">
                <div class="well">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
                 
                    <!-- show the employer post  -->
                    <div class= "job-posted">
                        <div class="create_btn">    
                            <a class="btn btn-primary" href="/posts/create"> CREATE POST</a>
                        </div>
                        <h3>JOB POSTED!</h3> 
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
@endif
@if(Auth::user()->role_as == '0')
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
  margin-top: 515px;
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

   <h1><b>JOB <br> RECOMMENDED</b></h1>
  
   <div class="post_page">
   

          @foreach ($post as $item)

           {{-- CONSTRUCTION attainment --}}

           @if(Auth::user()->attainment == '1')
           <tr>
            @if($item->job_categories == "CONSTRUCTION")
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
           @endif

          {{-- MANUFACTURING attainment --}}

          @if(Auth::user()->attainment == '2')
              <tr>
                @if($item->job_categories == "MANUFACTURING")
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
              @endif
 
          {{-- REAL ESTATE attainment --}}

          @if(Auth::user()->attainment == '3')
              <tr>
                @if($item->job_categories == "REAL ESTATE BUSINESS")
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
              @endif

    {{-- retail attainment --}}

          @if(Auth::user()->attainment == '4')
              <tr>
                @if($item->job_categories == "RETAIL SERVICES")
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
              @endif

              {{--BANKING/FINANCIA attainment  --}}

          @if(Auth::user()->attainment == '5')
              <tr>
                  @if($item->job_categories == "BANKING/FINANCIAL SERVICES")
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
              @endif     
              {{-- IT attainment --}}
              @if(Auth::user()->attainment == '6')
              <tr>
                @if($item->job_categories == "INFORMATION TECHNOLOGY SERVICES")
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
              @endif  

              {{-- Fastfood Attainment --}}
              
              @if(Auth::user()->attainment == '7')
              <tr>
                @if($item->job_categories == "FAST FOOD SERVICES")
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
              @endif  
              
              {{-- Manpower Attainment --}}
              
              @if(Auth::user()->attainment == '8')
              <tr>
                @if($item->job_categories == "MANPOWER SERVICES")
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
              @endif 

               {{-- WAREHOUSE Attainment --}}
              
               @if(Auth::user()->attainment == '9')
               <tr>
                @if($item->job_categories == "WAREHOUSE SERVICES")
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
               @endif 

                {{--OTHER Attainment --}}
              
                @if(Auth::user()->attainment == '10')
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
                @endif 

{{-- NA value --}}

@if(Auth::user()->attainment == '11')
<tr>
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
</tr>   
@endif 

          @endforeach
      </tbody>
  </table>
  </div>
  <br>
@endif
@endsection
