@extends('layout')

@section('title','Registration')


@section('content')

<div class="d-flex justify-content-center mt-5">
   
   <div class="card p-5">

      <h4 class="text-dark" style="width: 30rem;">REGISTRATION FORM</h4>
      <form method="POST" action="{{ url('/users') }}">
            @csrf
            <p>
                <label for="fname" >
                    <p class="text-dark">Enter your first name:</p>
                    <input type="text" class="form-control" name="fname" placeholder="Enter first name">
                </label>
                @error('fname')
                    <p style="color:#ff0000;">{{$message}}</p>
                @enderror
            </p>
            <p>
                <label for="lname" class="text-dark">
                    <p class="text-dark">Enter your last name:</p>
                <input type="text" name="lname" class="form-control" placeholder="Enter last name">
                </label> 
                @error('lname')
                    <p style="color:#ff0000;">{{$message}}</p>
                @enderror       
            </p>
            <p>
            <label for="email" class="text-dark">
                <p class="text-dark">Enter your email:</p>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </label>  
            @error('email')
                    <p style="color:#ff0000;">{{$message}}</p>
                @enderror     
            </p>
            <p>
                <label for="password" class="text-dark">
                <p class="text-dark"> Enter your password:</p>
                    <input type="password" class="form-control" name="password" placeholder="Enter email">
                </label>   
                @error('password')
                    <p style="color:#ff0000;">{{$message}}</p>
                @enderror 
            </p>  
            <p>
            <label for="password" class="text-dark"></label>  
            <p class="text-dark"> Re-enter password:</p>
            <input type="password" name="password_confirm" class="form-control" placeholder="Re-enter password">
            @error('password')
                    <p style="color:#ff0000;">{{$message}}</p>
            @enderror
            </p>   
            <p><button class = "btn btn-primary" type="submit" >Submit</button></p>
     </form>

   </div> 

</div>


@endsection