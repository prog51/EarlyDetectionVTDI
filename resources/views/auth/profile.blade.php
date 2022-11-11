@extends('layout')
@section('title', 'Profile')

@section('content')


<h1>Welcome to your profile page</h1>

<form method="POST" action="{{url('upload-users')}}" enctype="multipart/form-data">
 <p>Upload student records here</p>
 <p><input type="file" name="file"/></p> 
 <p><input type="submit" placeholder="SUBMIT"/></p>
 <p>
    @error('file')
      <span>{{ $message }}</span>
    @enderror
 </p>
</form>




@endsection