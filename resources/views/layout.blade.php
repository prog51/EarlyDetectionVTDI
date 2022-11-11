<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
          @yield('title')
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js">




</head>
 <body>
  
     <div class="flex-center position-ref text-white">
         
                <div class="top-right links p5 bg-primary" style="height:50px;">
                   
                        <a href="{{ route('admin') }}" class="mx-3">Back to Dashboard</a>
                   
                       
                    @auth
                    <div style="position:relative; left:80%; right:5%;">
                        <span> Welcome {{Auth::user()->fname}} </span>
                        <span style="padding-left:2px; padding-right:2px;">|</span>
                        <span style="padding-left:8px;"><a href="{{url('/logout')}}" class="text-light">Logout</a></span>
                    </div>
                     

                     @else
                        
                        <a href="{{ route('login') }}">Login</a>                       
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
        
        </div>
            
        <div>
             @yield('content')
        </div>
         <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
            </div>
       </footer>
     </body>


     <script>
        $('#customFile1').on('change',function(){
           var fileName = $(this).val();
           $('.showUploads1').html(fileName);
          // alert(fileName);
        });

        $('#customFile2').on('change',function(){
           var fileName = $(this).val();
           $('.showUploads2').html(fileName);
          // alert(fileName);
        });

        $('#customFile3').on('change',function(){
           var fileName = $(this).val();
           $('.showUploads3').html(fileName);
          // alert(fileName);
        });

        $('#customFile4').on('change',function(){
           var fileName = $(this).val();
           $('.showUploads4').html(fileName);
          // alert(fileName);
        });

        $('#customFile5').on('change',function(){
           var fileName = $(this).val();
           $('.showUploads5').html(fileName);
          // alert(fileName);
        });
    </script>

</html>