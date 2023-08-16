@extends('layouts.master')

@section('content')
    <h1>Admin Edit Post</h1>
    <div class="form-control">
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
        &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&nbsp;&nbsp;
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
        <br>
    </div>
        <div class="form-group" style="width:960px">
          <b>  {{Form::label('title', 'Title')}}</b>
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title...'])}}
        </div>
        <div class="form-group" style="width:960px">
           <b> {{Form::label('body', 'Job Description')}}</b>
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text...'])}}
        </div>
        <div class="form-group" style="width:1000px">
            {{Form::file('cover_image')}}
        </div>
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection