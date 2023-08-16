<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/png" href="img/cnjzlogo37px.png "!important>
        <title>{{ config('app.name', 'Laravel') }}</title>
        

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Styles -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>

    <body> 

        @include('inc.admin-navbar')

        <div id="layoutSidenav">
            @include('inc.admin-sidebar')

            <div id="layoutSidenav_content">
                <main class="container-fluid px-4">
                    
                    @yield('content')

                </main>
                @include('inc.admin-footer')
            </div>

        </div>

        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>

        {{-- @yield('scripts') --}}

    </body>
</html>
