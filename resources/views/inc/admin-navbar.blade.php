<style>

    .sb-topnav{
        background-color:rgb(21, 51, 69);
    }
    
    .sb-topnav:hover{
        color: white;
    }

    .navbar-brand{
        color: rgb(4, 255, 255);;
    }
    .navbar-brand:hover{
        color: rgb(3, 187, 187);;
    }
    </style>


<nav class="sb-topnav navbar navbar-expand ">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html"><b>Admin Panel</b></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
  
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        
        <li class="nav-item dropdown">
            
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                {{ Auth::user()->name }}</a>
            
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
               {{-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li> --}}
                    
                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                    @csrf
                </form>
                </li>
                <li><a class="dropdown-item" href="/">Home</a></li>
            </ul>
        </li>
    </ul>
</nav>