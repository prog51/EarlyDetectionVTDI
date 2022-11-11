@extends('layout')
@section('title', 'Login')

@section('content')


@error('errmessage')
       <p style="color:#ff0000; font-size:24pt; font-weight:bold; text-align:center">{{$message}}</p>
 @enderror 

<div class="d-flex justify-content-center mt-5 mb-5">
   
    <div class="card" style="width: 30rem;">
        <form method="POST" action="{{route('auth')}}">
           @csrf
                <div class="card-body">
                <div class="d-flex justify-content-center text-dark display-4">LOGIN</div>
                          <div class="form-group">
                            <label for="email" class="text-dark">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                          
                            @error('email')
                               <p style="color:#ff0000;">{{$message}}</p>
                            @enderror 
                          </div>
                          <div class="form-group">
                            <label for="password" class="text-dark">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                            @error('password')
                               <p style="color:#ff0000;">{{$message}}</p>
                            @enderror 
                          </div>
                          <div class="card-footer">
                          <button class = "btn btn-primary" type="submit" >Submit</button>
                          
                        </div>
              </form>
            <a href="{{ url('/registration') }}">Register today</a>
    </div>

</div>


@endsection()



