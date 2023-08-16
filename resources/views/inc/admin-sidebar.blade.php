<style>

.sb-sidenav{
    background-color:rgb(21, 51, 69);
    color: white;
}
.nav-link{
    color: white;
    text-decoration: none;
}
.nav-link:hover{
    background: rgb(3, 187, 187);
    color: white;
}
.nav{
    color: white;
}
.btn{
    color: white;
}
body{
   
    font-family: "Times New Roman", Times, serif;
}

</style>


<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion " id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Posts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/add-adminposts')}}">Add Posts</a>
                            <a class="nav-link" href="{{url('admin/adminposts')}}">View Posts</a>
                        </nav>
                    </div>

                    {{-- asdsadasad --}}
                    
                    <div class="sb-sidenav-menu-heading">Job Categories</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        View Job Categories
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('admin/manufacturing-category')}}">Manufacturing</a>
                            <a class="nav-link" href="{{url('admin/banking-category')}}">Banking Services</a>
                            <a class="nav-link" href="{{url('admin/construction-category')}}">Construction</a>
                            <a class="nav-link" href="{{url('admin/fastfood-category')}}">Fast Food Services</a>
                            <a class="nav-link" href="{{url('admin/retail-category')}}">Retail Servies</a>
                            <a class="nav-link" href="{{url('admin/IT-category')}}">IT Services</a>
                            <a class="nav-link" href="{{url('admin/realestate-category')}}">Real Estate Business</a>
                            <a class="nav-link" href="{{url('admin/manpower-category')}}">Manpower Services</a>
                            <a class="nav-link" href="{{url('admin/warehouse-category')}}">Warehouse Services</a>
                            <a class="nav-link" href="{{url('admin/others-category')}}">Others</a>
                        </nav>
                    </div>


                    {{--  --}}
                    
                    

                    <a class="nav-link" href="{{url('admin/users')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Users
                    </a>

{{-- 
                    <div class="sb-sidenav-menu-heading">Job Categories</div>
                    <a class="nav-link" href="{{url('admin/view-category')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        View Category
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a> --}}
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ Auth::user()->name }}
            </div>
        </nav>
    </div>
