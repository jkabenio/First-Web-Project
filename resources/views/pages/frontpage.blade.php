@extends('layouts.app')

@section('content')
<style>

  body{
  position: static;
  background-image: url(/img/newbgfront1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
    height: 100%;
    width: 100%;
}
.welcome{
  text-align: center;
    font-size: 35px; 
    height: 470px;
    
}
::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
.mini_title{
color: white;
font-family: 'Times New Roman', serif;
font-size: 25px; 
}
  {
    
  }
  h1 {
    margin-top: 140px;
    font-size: 100px; 
    font-family: "Times New Roman", Times, serif;

    background: rgb(1, 216, 216);
background: linear-gradient(to bottom, #00ff00 55%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;

}
h2{
  width: 100%;
  text-align: center;
  font-family: "Times New Roman", Times, serif;
    color:rgb(255, 255, 255);    
background-color: rgb(21, 51, 69);
  box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2);
}


* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */

.category_head{
  margin-left: 14px;
  width: 98%;
  margin-top: 10px;
    font-size: 50px; 
    font-family: "Times New Roman", Times, serif;
    color:rgb(255, 255, 255);    
background-color: rgb(21, 51, 69);
  text-align: center;
  box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2);

}
/* category css */
          /* Create three equal columns that floats next to each other */
          .column {
            margin-top: 13px;
         margin-left: 36px;
         margin-bottom: 20px;
         float: left;
         width: 30%;
         padding: 10px;
         height: 295px; /* Should be removed. Only for demonstration */
         border-width: medium;
         border-color: rgb(3, 187, 187);
         border-radius: 10px;
         border-style: solid;
         background-color: aliceblue;
        
       }
       .column:hover {
  -ms-transform: scale(.5); /* IE 9 */
  -webkit-transform: scale(.5); /* Safari 3-8 */
  transform: scale(1.1); 
}
       .category_title{
        text-decoration: none; 
       }
       .category_title:hover{
        text-decoration: none; 
       }
       
       /* Clear floats after the columns */
       .row:after {
         
         content: "";
         display: table;
         clear: both;
     
        
       }
       .row{
        width: 100%;
         margin-top: 10px;
         
       }
       .category_body{
        margin-bottom: 20px;
        margin-left: 35px;
        margin-top: 110px;
        border-width: medium;
         border-color: rgb(3, 187, 187);
         border-radius: 10px;
         border-style: solid;
         width: 95%;
         background-color:rgb(208, 206, 206);
       }
       .other{
        height: 295px; 
         width: 50%;
         padding-top: 7px;
         padding-left: 18px;
         margin-left: 25%;
         margin-bottom: 20px;
         border-width: medium;
         border-color: rgb(3, 187, 187);
         border-radius: 10px;
         border-style: solid;
         background-color: aliceblue;
       }
       .other:hover {
  -ms-transform: scale(.5); /* IE 9 */
  -webkit-transform: scale(.5); /* Safari 3-8 */
  transform: scale(1.1); 
}
       .others_title{
         width: 97.6%;
       }

       /* image transition */
         #cf {
position:relative;

}

#cf img {
position:absolute;
width: 94.3%;
-webkit-transition: opacity 1s ease-in-out;
-moz-transition: opacity 1s ease-in-out;
-o-transition: opacity 1s ease-in-out;
transition: opacity 1s ease-in-out;
animation-duration: 5s;
}

@keyframes cf3FadeInOut {
0% {
  opacity:1;
}
45% {
opacity:1;
}
55% {
opacity:0;
}
100% {
opacity:0;
}
}

#cf img.top {
animation-name: cf3FadeInOut;
animation-timing-function: ease-in-out;
animation-iteration-count: infinite;
animation-duration: 7;
animation-direction: alternate;
}

   </style>
    <!--style="background-color:white;-->
                 
        <div>
          <div class="welcome">
           {{-- <img alt="cnjzlogo2" src="/img/cnjzlogo2.png" width="100" height="100" />--}}
            <h1><strong><i> Camarines Norte <br> JobZone</i></strong></h1>
            
            <p class="mini_title"><strong>This is the Camarines Norte <br> website that will  provide convinient way <br> of finding job for you :)</strong></p>
          </div>  
        </div>
        
        {{--<h2>Need Help?</h2>
        <div class="container">
          <video width="200" height="200" controls>
            <source src="/videos/sample.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML video.
          </video>
          
          <p>
          Video courtesy of 
          <a href="public/video" target="_blank">Big Buck Bunny</a>.
          </p>
        </div> --}}
        
<div class="category_body">
  <h2 class="category_head">JOB CATEGORIES</h2>
        <div class="row">
          <div class="column" id="cf">
            <a  class="category_title" href="/banking">
            <h2>BANKING SERVICES</h2>
            <img class="bottom"  src="/img/banking3.jpg" alt="Girl in a jacket" height="78%">
           <img class="top" src="/img/banking4.jpg" alt="Girl in a jacket"  height="78%" >
          </a> 
          </div>
          <div class="column"  id="cf">
            <a class="category_title" href="/construction">
            <h2>CONSTRUCTION</h2>
            <img class="bottom"  src="/img/construction2.jpg" alt="Girl in a jacket" height="78%">
            <img class="top" src="/img/construction3.jpg" alt="Girl in a jacket" height="78%" >
          </a> 
          </div>
          <div class="column"  id="cf">
            <a class="category_title" href="/fastfood">
            <h2>FAST FOOD SERVICES</h2>
            <img class="bottom"  src="/img/fastfood4.jpg" alt="Girl in a jacket" height="78%">
            <img class="top" src="/img/fastfood3.jpg" alt="Girl in a jacket"  height="78%" >
          </a> 
          </div>
          <div class="column"  id="cf">
            <a class="category_title" href="/retail">
            <h2>RETAIL SERVICES</h2>
              <img class="bottom"  src="/img/retail1.jpg" alt="Girl in a jacket" height="78%">
              <img class="top" src="/img/retail2.jpg" alt="Girl in a jacket"  height="78%" >
            </a> 
          </div>

          <div class="column"  id="cf">
            <a class="category_title" href="/it">
              <h2>IT SERVICES</h2>
              <img class="bottom"  src="/img/it2.jpg" alt="Girl in a jacket" height="78%">
              <img class="top" src="/img/it1.jpg" alt="Girl in a jacket"  height="78%" >
            </a> 
          </div>
          
          <div class="column"  id="cf">
            <a class="category_title" href="/manufacturing">
              <h2>MANUFACTURING</h2>
              <img class="bottom"  src="/img/manufacturing1.jpg" alt="Girl in a jacket" height="78%">
              <img class="top" src="/img/manufacturing2.jpg" alt="Girl in a jacket"  height="78%" >
            </a> 
          </div>


          <div class="column"  id="cf">
            <a class="category_title" href="/estate">
              <h2>REAL ESTATE BUSINESS</h2>
              <img class="bottom"  src="/img/real estate1.jpg" alt="Girl in a jacket" height="65%">
              <img class="top" src="/img/relestate2.jpg" alt="Girl in a jacket"  height="65%" >
            </a> 
          </div>
          

          <div class="column"  id="cf" float="left">
            <a class="category_title" href="/manpower">
              <h2>MANPOWER SERVICES</h2>
              <img class="bottom"  src="/img/manpower1.jpg" alt="Girl in a jacket"  height="65%">
              <img class="top" src="/img/greyson-joralemon-Ai98ProjadE-unsplash.jpg" alt="Girl in a jacket"   height="65%" >
            </a> 
          </div>

          <div class="column"  id="cf">
            <a class="category_title" href="/warehouse">
              <h2>WAREHOUSE SERVICES</h2>
              <img class="bottom"  src="/img/warehouse1.jpg" alt="Girl in a jacket"  height="65%">
              <img class="top" src="/img/warehouse2.jpg" alt="Girl in a jacket"   height="65%" >
            </a> 
          </div>
        </div>
        <div class="other"  id="cf">
          <a  class="category_title" href="/others">
            <h2 class="others_title">OTHERS</h2>
            <img class="bottom"  src="/img/others1.jpeg" alt="Girl in a jacket" width="10%" !important height="78%">
            <img class="top" src="/img/others2.jpeg" alt="Girl in a jacket"   width="10%" !important height="78%" >
          </a> 
        </div>
        
      </div>
       
@endsection