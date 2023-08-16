
<style>
.navbar {
  overflow: show;
  position: fixed;
  top: 0;
  width: 100%;
  height: 80px;
  font-size: 16px; 
  z-index: 1;
  font-family: "Times New Roman", Times, serif;
  background-color:rgb(21, 51, 69);
    background-repeat: no-repeat;
    background-size: cover;
} 

/*.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}*/
.page_logo:hover{
  background: rgb(21, 51, 69);
  color: black;
}

.page_logo{

}
.login_link{
  float: right;
}
 .navigation:hover {
  background: rgb(3, 187, 187);
  color: black;
}
/* search box styles*/
.search_bar{
  background-color:rgb(255, 255, 255);
  height: 25px;
  width: 60%;
  
}
.fa{
 
  float: center;
  height: 30px;
  background-color:rgb(3, 187, 187);
  border-style: solid;
  border-width: medium;
  border-radius: 100px;
  border-color: rgb(3, 187, 187);
  color: rgb(255, 255, 255);
}
.fa:hover{
  background: rgb(2, 155, 155);
  
}

.search_box{
  text-align: center;
  margin-top: 5px;
}

</style>
<!--dropdown search bar styles-->
<style>
.dropbtn {
  background-color: rgb(21, 51, 69);
  color: white;
  padding-top: 8.5px;
  font-size: 16px; 
  border: none;
  cursor: pointer;
  height: 30px;
}

.dropdown {

  display: inline-block;
}

.dropdown-content {
  
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  height: 200px;
   overflow: auto;
}

.dropdown-content a {
  
  color: black;
  padding: 12px 20px;
  text-decoration: none;
  display: block;
  text-align: center;
  
}

.dropdown-content a:hover {background-color: rgb(112, 222, 222);}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color:rgb(3, 187, 187);

}
  </style>

<nav class="navbar navbar-expand-lg navbar-dark ">
 <a href="/"   class="page_logo"> <img alt="cnjzlogo2" src="/img/logo70px2.png"/>  </a>
  <div class="container">
  
  

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="navigation  nav-link active" aria-current="page" href="/">|    Home    |</a>
        </li>
                <!-- dropdown for municipality-->
          <li class="nav-item">
            <div class="dropdown">
              <button class="dropbtn">Municipality    |</button>
              <div class="dropdown-content">
                <a href="/basud">BASUD</a>
                <a href="/capalonga">CAPALONGA</a>
                <a  href="/daet">DAET</a>
                <a href="/panganiban">JOSE PANGANIBAN</a>
                <a href="/labo">LABO</a> 
                <a href="/mercedes">MERCEDES</a>
                <a href="/paracale">PARACALE</a>
                <a href="/san_lorenzo_ruiz">SAN LORENZO RUIZ</a>
                <a href="/san_vicente">SAN VICENTE</a>
                <a href="/sta_elena">STA ELENA</a>
                <a href="/talisay">TALISAY</a>
                <a href="/vinzons">VINZONS</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="navigation nav-link active" href="/posts">Job Offer   |</a>
          </li>
          <li class="nav-item">
            <a class="navigation nav-link active" href="/services">Terms    |</a>
          </li>
          <li class="nav-item">
            <a class="navigation nav-link active" href="/about">About Us    |</a>
          </li>
         
      </ul>
    </div>
    <div class="login_link">
    <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto">
                <!-- serach box -->
                <li class="nav-item">
                  <form  class="search_box" action="{{url('search')}}" method="GET">
          
                    <input type="text" class="search_bar"value="" name="query" id="query" />
                    <button class="fa fa-search">search</button>
                  </form> 
          
                </li> 
      <!-- Authentication Links -->
        @guest
          @if (Route::has('login'))
              <li class="nav-item ">
                  <a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>
              
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    {{ __('Log Out') }}
                    
                </a>
                @if(Auth::user()->role_as == '0' )
                <a href="/home" class="dropdown-item">{{ __('Job recommended') }}</a>
                @endif
                
                
                @if(Auth::user()->role_as == '14' )
                <a href="/home" class="dropdown-item">{{ __('Job Posted') }}</a>
                @endif

                @if(Auth::user()->role_as == '1' )
                <a href="admin/dashboard" class="dropdown-item">{{ __('Admin Panel') }}</a>
                <a href="/home" class="dropdown-item">{{ __('Job Posted') }}</a>
                @endif
                @if(Auth::user()->role_as == '2')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Vinzons Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as == '3')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Talisay Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as == '4')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Sta Elena Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as == '5')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('San Vicente Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as == '6')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('San Lorenzo Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as == '7')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Paracale Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as =='8')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Mercedes Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as =='9')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Labo Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as == '10')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Panganiban Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as == '11')
                <a href="/municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Daet Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as == '12')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Capalonga Panel') }}</a>
                
                @endif
                @if(Auth::user()->role_as == '13')
                <a href="municipalityadmin/municipalityadmindashboard" class="dropdown-item">{{ __('Basud Panel') }}</a>
                
                @endif
                <div class="dropdown-divider"></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

