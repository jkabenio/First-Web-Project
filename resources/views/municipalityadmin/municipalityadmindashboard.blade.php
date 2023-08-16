@extends('layouts.municipalitymaster')

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
                    <a class="view_details_css " href="/municipalityadmin/adminposts">View Details</a>
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
                    <a class="view_details_css " href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-30 col-md-6">
            <div class="card_admin mb-4">
                <div class="card-body">
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$admins}}&nbsp;Admin</b></h3>
                    <p>You have {{$admins}} admins in your database. Click on <br>link below to view all the admins. </p>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="view_details_css " href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-30 col-md-6">
            <div class="card_muni   mb-4">
                <div class="card-body">

                    {{-- VINZONS --}}

                    @if(Auth::user()->role_as == '2')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$vinzons_admins}}&nbsp;Vinzons Admin</b></h3>
                    <p>You have {{$vinzons_admins}}&nbsp;Vinzons admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- TALISAY --}}

                    @if(Auth::user()->role_as == '3')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$talisay_admins}}&nbsp;Talisay Admin</b></h3>
                    <p>You have {{$talisay_admins}}&nbsp;Talisay admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- STA. ELENA --}}

                    @if(Auth::user()->role_as == '4')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$sta_elena_admins}}&nbsp;Sta. Elena Admin</b></h3>
                    <p>You have {{$sta_elena_admins}}&nbsp;Sta. Elena admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- SAN VICENTE --}}

                    @if(Auth::user()->role_as == '5')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$san_vicente_admins}}&nbsp;San Vicente Admin</b></h3>
                    <p>You have {{$san_vicente_admins}}&nbsp;San Vicente admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif 

                    {{-- SAN LORENZO --}}

                    @if(Auth::user()->role_as == '6')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$san_lorenzo_admins}}&nbsp;San Lorenzo Admin</b></h3>
                    <p>You have {{$san_lorenzo_admins}}&nbsp;San Lorenzo admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- PARACALE --}}

                    @if(Auth::user()->role_as == '7')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$paracale_admins}}&nbsp;Paracale Admin</b></h3>
                    <p>You have {{$paracale_admins}}&nbsp;Paracale admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- MERCEDES --}}

                    @if(Auth::user()->role_as == '8')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$mercedes_admins}}&nbsp;Mercedes Admin</b></h3>
                    <p>You have {{$mercedes_admins}}&nbsp;Mercedes admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- LABO --}}

                    @if(Auth::user()->role_as == '9')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$labo_admins}}&nbsp;Labo Admin</b></h3>
                    <p>You have {{$labo_admins}}&nbsp;Labo  admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- PANGANIBAN --}}

                    @if(Auth::user()->role_as == '10')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$panganiban_admins}}&nbsp;Panganiban Admin</b></h3>
                    <p>You have {{$panganiban_admins}}&nbsp;Panganiban  admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- DAET --}}

                    @if(Auth::user()->role_as == '11')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$daet_admins}}&nbsp;Daet Admin</b></h3>
                    <p>You have {{$daet_admins}}&nbsp;Daet admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- CAPALONGA --}}
                    
                    @if(Auth::user()->role_as == '12')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$capalonga_admins}}&nbsp;Capalonga Admin</b></h3>
                    <p>You have {{$capalonga_admins}}&nbsp;Capalonga admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    {{-- BASUD --}}

                    @if(Auth::user()->role_as == '13')
                    <h2> <img src="/img/user.png" alt="Girl in a jacket"></h2>
                    <h3><b>{{$basud_admins}}&nbsp;Basud Admin</b></h3>
                    <p>You have {{$basud_admins}}&nbsp;Basud admins in your database. Click<br> on link below to view all the admins. </p>
                    @endif

                    
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="view_details_css " href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection