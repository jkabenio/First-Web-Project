@extends('layouts.master')

@section('content')
<style>
.card_muni{
    position: relative;
  
  width: 100%;
  height: 90%;
  background-image: url(/img/4.jpeg);
  background-repeat: no-repeat;
  background-size: cover;
  color: rgb(4, 255, 255);;

}
.card_posts{
    width: 100%;
    height: 90%;
  background-image: url(/img/3.jpeg);
  background-repeat: no-repeat;
  background-size: cover;
  color: rgb(4, 255, 255);
}

.card_admin{
    width: 100%;
    height: 90%;
  background-image: url(/img/2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color: rgb(4, 255, 255);;
}

.card_employer{
  width: 100%;
  height: 90%;
  background-image: url(/img/1-2.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color: rgb(4, 255, 255);
  
  
    
}

body{
    background-color: rgb(255, 255, 255);
    font-family: "Times New Roman", Times, serif;
}

h1,h2,h3,h4,h5{
    font-family: "Times New Roman", Times, serif;
    text-align: center;
}
.view_details_css{
    color: rgb(0, 0, 255);
}

/* h3{
    width: 50px;
    border-style: solid;
  border-width: 2;
  border-radius: 100px;
  border-color: rgb(0, 255, 255);
  color: rgb(255, 255, 255);;
  margin-left: 43.5%;
  background-color: rgba(255, 255, 255, 0.733);
} */
h2{
    width: 100px;
    height: 100%;
    border-style: solid;
  border-width: 2;
  border-radius:50%;
  border-color: rgba(0, 0, 0, 0);
  color: rgb(0, 137, 190);
  margin-left: 38%;
  background-color: rgba(0, 0, 0, 0.468);
}
p{
    text-align: center;
    color: aliceblue;
}
h1{

    font-size: 50px;

  /* margin-left: 38%; */

}
.row{
    margin-left: 30px;
}

</style>

<div class="container-fluid px-4">
    {{-- <h1 class="mt-4"><b>Dashboard</b></h1> --}}
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"></li>
    </ol>
    <div class="row" style="width:900px">
        <div class="col-xl-30 col-md-6">
            <div class="card_posts mb-4">
                <div class="card-body">
                   <h2> <img src="/img/post.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$posts}}&nbsp;Posts</b></h3>
                    <p>You have {{$posts}} posts in your database. Click on <br>link below to view all the posts. </p>
                </div>
                    
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="view_details_css " href="/admin/adminposts">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-30 col-md-6">
            <div class="card_employer mb-4">
                <div class="card-body">
                    <h2> <img src="/img/users.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$employer}}&nbsp;Employer</b></h3>
                    <p>You have {{$employer}} posts in your database. Click on <br>link below to view all the users. </p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="view_details_css " href="/admin/users">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-30 col-md-6">
            <div class="card_admin mb-4">
                <div class="card-body">
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$admins}}&nbsp;Admin</b></h3>
                    <p>You have {{$admins}} admins in your database.<br> Click on link below to view all the admins. </p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="view_details_css " href="/admin/users">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-30 col-md-6">
            <div class="card_muni   mb-4">
                <div class="card-body">
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{ $municipality_admins}}&nbsp;Municipality Admin</b></h3>
                    <p>You have {{ $municipality_admins}}&nbsp; Municipality admins in your database. Click<br> on link below to view all the admins. </p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="view_details_css " href="/admin/users">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection