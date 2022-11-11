@extends('layout')

@section('title', 'All Students')

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
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @if(count($listing) > 0)

                     @foreach($listing AS $index => $student)
                                             
                           <tr>
                              <td>{{ ++$index }}</td>
                              <td>{{ $student->fname }}</td>
                              <td>{{ $student->lname }}</td>
                              <td>{{ $student->email }}</td>
                              <td>{{ $student->studentID }}</td>                              
                            </tr>

                       @endforeach
                   @else

                        <h4>NO RESULTS</h4>

                     @endif
                   
                  </tfoot>
                </table>
                <div>
                     {{$listing->links()}}
               </div>
              </div>
              <!-- /.card-body -->
            </div>

            <div>
                  <a href="{{ route('reportAll') }}"><button class="btn btn-danger text-white m-5">STUDENTS AT RISK</button></a>
            </div>
@endsection