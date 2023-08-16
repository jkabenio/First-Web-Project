@extends('layouts.app')

@section('content')
<style>
 h1{
     margin-top: 5px;
     margin-left: 4px;
    width: 99%;
   text-align: center;
   border-style: solid;
  border-width: medium;
  border-color: rgb(21, 51, 69);
color: aliceblue;
  background-color: rgb(21, 51, 69);
 } 
   
    .create_div{
    margin-top: 90px;
    margin-bottom: 10px;
 width: 80%;
 height: 80%;
 margin-left: 130px;
 border-style: solid;
  border-width: medium;
  border-color: rgb(21, 51, 69);
  border-radius: 10px;
  background-color: rgb(196, 196, 196);
}
.form-group{
    width: 90%;
    margin-left: 5%;
   
}
.muni_label{
    margin-top: 40px;
}
.btn{
    margin-left: 20%;
    margin-bottom: 5px;
    width: 60%;
}
   </style>
<div class="create_div">
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            <label  class="muni_label" for="job_categories"><b>Job Category:</b></label>
            <select name="job_categories" id="job_categories">
               
                @foreach($post as $posts)                  
                    <option >{{$post->job_categories}}</option>
                    @break
                 @endforeach
                 @if($post->job_categories !== "CONSTRUCTION")
            <option value="CONSTRUCTION">CONSTRUCTION</option>
            @endif
            @if($post->job_categories !== "MANUFACTURING")
            <option value="MANUFACTURING">MANUFACTURING</option>
            @endif
            @if($post->job_categories !== "REAL ESTATE BUSINESS")
            <option value="REAL ESTATE BUSINESS">REAL ESTATE BUSINESS</option>
            @endif
            @if($post->job_categories !== "RETAIL SERVICES")
            <option value="RETAIL SERVICES">RETAIL SERVICES</option>
            @endif
            @if($post->job_categories !== "BANKING/FINANCIAL SERVICES")
            <option value="BANKING/FINANCIAL SERVICES">BANKING/FINANCIAL SERVICES</option>
            @endif
            @if($post->job_categories !== "INFORMATION TECHNOLOGY SERVICES")
            <option value="INFORMATION TECHNOLOGY SERVICES">INFORMATION TECHNOLOGY SERVICES</option>
            @endif
            @if($post->job_categories !== "FAST FOOD SERVICES")
            <option value="FAST FOOD SERVICES">FAST FOOD SERVICES</option>
            @endif
            @if($post->job_categories !== "MANPOWER SERVICES")
            <option value="MANPOWER SERVICES">MANPOWER SERVICES</option>
            @endif
            @if($post->job_categories !== "WAREHOUSE SERVICES")
            <option value="WAREHOUSE SERVICES">WAREHOUSE SERVICES</option>
            @endif
            @if($post->job_categories !== "OTHER")
            <option value="OTHER">OTHER</option>
            @endif
            </select> 
            &emsp;&emsp; &nbsp;
            <label  class="muni_label" for="municipality"><b>Municipality:</b></label>
            <select name="municipality" id="municipality">
                @foreach($post as $posts)
                <option >{{$post->municipality}}</option>
                @break
             @endforeach
             @if($post->municipality !== "DAET CAMARINES NORTE")
            <option value="DAET CAMARINES NORTE">DAET CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "VINZONS CAMARINES NORTE")
                <option value="VINZONS CAMARINES NORTE">VINZONS CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "JOSE PANGANIBAN CAMARINES NORTE")
                <option value="JOSE PANGANIBAN CAMARINES NORTE">JOSE PANGANIBAN CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "LABO CAMARINES NORTE")
                <option value="LABO CAMARINES NORTE">LABO CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "CAPALONGA CAMARINES NORTE")
                <option value="CAPALONGA CAMARINES NORTE">CAPALONGA CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "STA ELENA CAMARINES NORTE")
                <option value="STA ELENA CAMARINES NORTE">STA ELENA CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "SAN LORENZO RUIZ CAMARINES NORTE")
                <option value="SAN LORENZO RUIZ CAMARINES NORTE">SAN LORENZO RUIZ CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "SAN VICENTE CAMARINES NORTE")
            <option value="SAN VICENTE CAMARINES NORTE">SAN VICENTE CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "MERCEDES CAMARINES NORTE")
                <option value="MERCEDES CAMARINES NORTE">MERCEDES CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "TALISAY CAMARINES NORTE")
                <option value="TALISAY CAMARINES NORTE">TALISAY CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "BASUD CAMARINES NORTE")
                <option value="BASUD CAMARINES NORTE">BASUD CAMARINES NORTE</option>
            @endif

            @if($post->municipality !== "PARACALE CAMARINES NORTE")
                <option value="PARACALE CAMARINES NORTE">PARACALE CAMARINES NORTE</option>
            @endif
            </select>
            <br>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Job Description')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection