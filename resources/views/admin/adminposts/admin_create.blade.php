@extends('layouts.master')

@section('content')
<style>
h1{
    text-align: center;
    font-family: "Times New Roman", Times, serif;
    font-size: 50px;
}

</style>
    <h1><b>Admin Create Post</b></h1>
    <div class="form-control"  style="width:935px">
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        <label  class="muni_label" for="job_categories"><b>Job Category:</b></label>
        <select name="job_categories" id="job_categories">
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
        &emsp;&emsp;&emsp;&emsp; &emsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label  class="muni_label" for="municipality"><b>Municipality:</b></label>
                <select name="municipality" id="municipality">
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
            </div>
            <br>
            <div class="form-group" style="width:908px">
          <b>{{Form::label('title', ' Job Title')}}</b>
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Job Title...'])}}
        </div>
        <br>
        <div class="form-group" style="width:908px">
        <b>    {{Form::label('body', 'Job Description')}} </b>
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Job Description...'])}}
        </div>
        <div class="form-group" style="width:1000px">
            {{Form::file('cover_image')}}
        </div>
        <br>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection