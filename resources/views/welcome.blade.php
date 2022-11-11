<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

   
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            @auth
            <div class="content">
                <div class="title m-b-md" style="text-transform:uppercase;">
                     WELCOME {{auth()->user()->fname}}

                     <p><a href="{{url('/logout')}}">Logout</a></p>
                     <p><a href="{{route('import')}}">Profile</a></p>
                     <p><a href="{{route('list')}}">Show students</a></p>
                </div>
                 
                <!--<div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->
            </div>
        </div>

        @else

        <h5>YOU ARE NOT PERMITTED TO VIEW THIS PAGE</h5>


        @endauth

        <div class="card">
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="text-dark" >
                            @csrf
                            <div>
                                <div>
                                    <p><input type="file" name="h" class="custom-file-input" id="customFile"></p>
                                    <p><label class="custom-file-label" for="customFile">Choose file</label></p>
                                </div>
                            </div>
                            <input type="submit" placeholder="SUBMIT" />
                        </form>
</div>



<h1>-------------------here-----------------------</h1>

<div class="d-flex justify-content-center mt-5 mb-5 text-dark">   
                    <div class="card" style="width: 30rem; color:#000;">
                    
                    <form action="{{ route('acad') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div>
                                    
                                    <p><input type="file" name="acad" class="custom-file-input" id="customFile2"><b class="showUploads2"></b></p>
                                    <p><label class="custom-file-label" for="customFile">Choose file</label></p>
                                </div>
                            </div>
                            <input type="submit" placeholder="SUBMIT" />
                        </form>

                    
                    </div>
                </div>
    </body>
</html>
