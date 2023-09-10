<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Task') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dash.css')}}">
    <script src="https://kit.fontawesome.com/c55dd26e11.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div id="app">
        <nav id="top-navbar" class="navbar navbar-expand-md  p-3 fixed-top">
            <div class="container">
                <div class="btn2 btn">
                    <span class="fas fa-bars"></span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a href="/home" class="nav-link">
                                Home
                            </a></li>
                        <li class="nav-item"><a href="/Enquiry" class="nav-link">
                                Enquiry
                            </a></li>
                        <li class="nav-item"> <a href="/Trial" class="nav-link">
                                Trial
                            </a></li>
                        <li class="nav-item"><a href="Members" class="nav-link">
                                Members
                            </a></li>
                        <li class="nav-item"><a href="/Package" class="nav-link">
                                Package
                            </a></li>
                        <li class="nav-item"><a  href="/Report" class="nav-link">
                                Report
                            </a></li>
                        <li class="nav-item"><a  href="/Employee" class="nav-link">
                                Employees
                            </a></li>
                        <li class="nav-item"><a href="/Master" class="nav-link">
                                Master
                            </a></li>
                        <li class="nav-item"><a href="/Role" class="nav-link">
                                Role Management
                            </a></li>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">

                            <a id="nav-link" class="nav-link" href="#">
                                Welcome, {{ Auth::user()->name }}
                            </a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="sidebar">
            <div class="text-center">
                <img src="{{asset('assets/image/back4.png')}}" alt="logo" class="img-fluid" style="width: 100px;">

            </div>
            <div class="text"> Menu </div>
            <ul class="leftul">
                <li class="leftli"> <a href="/home" class="link"><i class="bi bi-house p-2"></i>Home</a></li>
                <li class="leftli"><a href="/Employee" class="link"><i class="bi bi-heart-fill p-2"></i>Employee</a> </li>
                <li class="leftli"><a href="/Package" class="link"><i class="bi bi-journal-text p-2"></i>Plan Package</a> </li>
                <li class="leftli"><a href="/Member" class="link"><i class="bi bi-cart-fill p-2"></i>Member</a> </li>
                <li class="leftli"><a href="/Report" class="link"><i class="bi bi-person-x p-2"></i>Report</a> </li>
                <li class="leftli">
                    <a href="{{ route('logout') }}" class="link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-left p-2"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li class="leftli">
                <p>Navigation</p>
                <li class="leftli"><a href="" class="link"><i class="bi bi-hand-thumbs-up p-2"></i>Follow Up</a></li>
                <li class="leftli"><a href="" class="link"><i class="bi bi-heart-fill p-2"></i>Wishes </a></li>
            </ul>
        </div>
        <main id="main">
            @yield('content')
            @yield('RoleContent')
            @yield('EmployeeContent')
            @yield('EnquiryContent')
            @yield('MembersContent')
            @yield('PakageContent')
            @yield('ReportContent')
            @yield('TrialContent')
        </main>
    </div>
    <script src="{{asset('assets/js/text.js')}}"></script>
    <script src="{{asset('assets/js/dash.js')}}"></script>
    <script src="{{asset('assets/js/addplan.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f42b8bcd38.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>