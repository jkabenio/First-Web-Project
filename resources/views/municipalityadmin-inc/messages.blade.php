<style>
    .error{
      margin-top: calc(5vh + 35px); 
      position: relative;
      margin-bottom: 0% !important; 
    } 
   </style>
<div class="error">
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
</div>