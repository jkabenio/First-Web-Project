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
.btn{
    margin-left: 20%;
    margin-bottom: 5px;
    width: 60%;
}
.form-group{
    width: 90%;
    margin-left: 5%;
   
}
.muni_label{
    margin-top: 40px;
}
</style>
<div class="create_div">
        <h1>Create Post</h1>
        {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

            

        <div class="form-group">
            <label  class="muni_label" for="job_categories"><b>Job Category:</b></label>
            <select name="job_categories" id="job_categories">
            <option value=""></option>
            <option value="CONSTRUCTION">CONSTRUCTION</option>
            <option value="MANUFACTURING">MANUFACTURING</option>
            <option value="REAL ESTATE BUSINESS">REAL ESTATE BUSINESS</option>
            <option value="RETAIL SERVICES">RETAIL SERVICES</option>
            <option value="BANKING/FINANCIAL SERVICES">BANKING/FINANCIAL SERVICES</option>
            <option value="INFORMATION TECHNOLOGY SERVICES">INFORMATION TECHNOLOGY SERVICES</option>
            <option value="FAST FOOD SERVICES">FAST FOOD SERVICES</option>
            <option value="MANPOWER SERVICES">MANPOWER SERVICES</option>
            <option value="WAREHOUSE SERVICES">WAREHOUSE SERVICES</option>
            <option value="OTHER">OTHER</option>
            </select> 
            &emsp;&emsp;
                    <label  class="muni_label" for="municipality"><b>Municipality:</b></label>
                    <select name="municipality" id="municipality">
                    <option value=""></option>
                    <option value="DAET CAMARINES NORTE">DAET CAMARINES NORTE</option>
                    <option value="VINZONS CAMARINES NORTE">VINZONS CAMARINES NORTE</option>
                    <option value="JOSE PANGANIBAN CAMARINES NORTE">JOSE PANGANIBAN CAMARINES NORTE</option>
                    <option value="LABO CAMARINES NORTE">LABO CAMARINES NORTE</option>
                    <option value="CAPALONGA CAMARINES NORTE">CAPALONGA CAMARINES NORTE</option>
                    <option value="STA ELENA CAMARINES NORTE">STA ELENA CAMARINES NORTE</option>
                    <option value="SAN LORENZO RUIZ CAMARINES NORTE">SAN LORENZO RUIZ CAMARINES NORTE</option>
                    <option value="SAN VICENTE CAMARINES NORTE">SAN VICENTE CAMARINES NORTE</option>
                    <option value="MERCEDES CAMARINES NORTE">MERCEDES CAMARINES NORTE</option>
                    <option value="TALISAY CAMARINES NORTE">TALISAY CAMARINES NORTE</option>
                    <option value="BASUD CAMARINES NORTE">BASUD CAMARINES NORTE</option>
                    <option value="PARACALE CAMARINES NORTE">PARACALE CAMARINES NORTE</option>

                    </select>
                    <br>
               <b> {{Form::label('title', ' Job Title')}}</b>
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Job Title'])}}
            </div>
            <div class="form-group">
               <b> {{Form::label('body', 'Job Description & Qualification')}}</b>
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' =>''])}}
            </div>
            <div class="form-group">
               {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
</div>
@endsection