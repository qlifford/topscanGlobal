<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Topscan Global Repairs</title>  
    <link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <nav class="bg-dark">
        <ul>
            <li><a href="/" >Home</a></li>
            <li><a href="{{ route('dashboard') }}" >Dashboard</a></li>
            <li><a href="{{ route('post') }}" >Blog</a></li>
        </ul>
            
        <ul >
            @auth
                <li><a href="" >{{ auth()->user()->name }}</a></li>

            <form action="{{ route('logout') }}" method="post" style="display: inline">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
            @endauth

            @guest 
                <li><a href="{{ route('login') }}" >Login</a></li>
                <li><a href="{{ route('register') }}" >Register</a></li>                
            @endguest

            {{-- @if (auth()->user())
                <li><a href="" >User</a></li>
                <li><a href="{{ route('post') }}" >Logout</a></li>
            @else            
                <li><a href="{{ route('login') }}" >Login</a></li>
                <li><a href="{{ route('register') }}" >Register</a></li>                
            @endif --}}
        </ul>

    </nav>
    
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>