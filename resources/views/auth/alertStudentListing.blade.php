@extends('layout')
@section('title', 'Alert Student')

@section('content')


<div class="card text-dark">
              <div class="card-header">
                <h1 class="card-title">ALL STUDENTS</h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>number</th>
                    <th>first name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Student ID</th>
                    <th>Assignment</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(count($alertStudent) > 0)

                     @foreach($alertStudent AS $index => $student)
                                             
                           <tr>
                              <td>{{++$index}}</td>
                              <td>{{$student->fname}}</td>
                              <td>{{$student->lname}}</td>
                              <td>{{$student->email}}</td>
                              <td>{{$student->studentID}}</td>
                              <td>{{$student->assignmentAllPass}}</td>
                        </tr>

                       @endforeach

                   @else

                        <h4>NO RESULTS</h4>

                     @endif
                   
                  </tfoot>
                </table>
                <div>
                     {{$alertStudent->links()}}
               </div>
              </div>
              <!-- /.card-body -->
            </div>


@endsection