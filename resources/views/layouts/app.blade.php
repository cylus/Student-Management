<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management System')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
<style>
    body{
        background: #f4f4f4;
    }
    .navbar-brand{
        font-weight: 800;
        letter-spacing: .2px;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Student Mangement System</a>
        <div class="">
            @auth 
            <a href="{{route('dashboard')}}">Dashboard</a>
           
            <form action="{{route('logout')}}" method="post">@csrf <button>Logout</button></form>
            @else
            <div class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-link" href="{{route('login')}}">Login</a>
            <a class="nav-link" href="{{route('register')}}">Register</a>  
            </div>
            @endauth  
        </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
