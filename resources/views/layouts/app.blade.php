<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- footer -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="assets/css/style.css">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/png" href="img/cnjzlogo37px.png "!important>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



   
</head>
<body> 
    <style>
      
      html {
  height: 100%;
  width:  100%;
}
body {
  min-height: 100%;
  font-family: "Times New Roman", Times, serif ;
  min-width:  100%;
}

    .footer-basic {
      padding: 10px 10px 0px 10px;
      background-color:rgb(21, 51, 69);
      color:#feffff;
      width:100%;
      position: relative;
      bottom:0;
      height: 150px;
      }
      
      .footer-basic ul {
        padding:0;
        list-style:none;
        text-align:center;
        font-size:18px;
        line-height:1.6;
        margin-bottom:0;
      }
      
      .footer-basic li {
        padding:0 10px;
      }
      
      .footer-basic ul a {
        color:inherit;
        text-decoration:none;
        opacity:0.8;
      }
      
      .footer-basic ul a:hover {
        opacity:5;
      }
      
      .footer-basic .social {
        text-align:center;
        padding-bottom:25px;
      }
      
      .footer-basic .social > a {
        font-size:24px;
        width:40px;
        height:40px;
        line-height:40px;
        display:inline-block;
        text-align:center;
        border-radius:50%;
        border:1px solid #ccc;
        margin:0 8px;
        color:inherit;
        opacity:0.75;
      }
      
      .footer-basic .social > a:hover {
        opacity:0.9;
      }
      
      .footer-basic .copyright {
        margin-top:15px;
        text-align:center;
        font-size:13px;
        color:#aaa;
        margin-bottom:0;
      }
    </style>
  
    @include('inc.navbar')

    @include('inc.messages')
    <div>
    @yield('content')   
    
    </div>
  
    <div class="footer-basic">
      <footer>
          <div class="social">
              <a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a>
              <a href="https://www.snap.com/"><i class="icon ion-social-snapchat"></i></a>
              <a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a>
              <a href="https://www.facebook.com"><i class="icon ion-social-facebook"></i></a>
          </div>
          <ul class="list-inline">
              <li class="list-inline-item"><a href="/">Home</a></li>
              <li class="list-inline-item"><a href="/services">Services</a></li>
              <li class="list-inline-item"><a href="/services">About</a></li>
              <li class="list-inline-item"><a href="/services">Terms</a></li>
              <li class="list-inline-item"><a href="/services">Privacy Policy</a></li>
          </ul>
          <p class="copyright">Camarines Norte JobZone</p>
      </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>  

</body>
</html>
