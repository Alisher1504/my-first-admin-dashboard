<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    </head>
    <body class="home-body">
        <div class="container main-1">
            @if (Route::has('login'))
                <div class="">
                    @auth
                    
                        <div class="gov text-end">
                            <div class="row align-items-center">
                                <div class="col text-start">
                                    <h1>FASTER</h1>
                                </div>
                    
                                <div class="col">
                                    <a href="{{ url('/color') }}" class="btn btn-primary">Home</a>
                                    <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row2">
                            <div class="col text-center manager">
                                <h1>Please wait for the manager's response</h1>
                            </div>
                        </div>

                    @else
                    
                        <div class="glavni ">
                            
                            <div class="row align-items-center">

                                <div class="col text-start">
                                    <h1>FASTER</h1>
                                </div>

                                <div class="col text-end">
                                    <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-danger">Register</a>
                                    @endif
                                </div>

                            </div>

                            <div class="row2">
                                <div class="col text-center manager">
                                    <h1>FASTER inovation school</h1>
                                </div>
                            </div>

                        </div>

                    @endauth
                </div>
            @endif


        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>
