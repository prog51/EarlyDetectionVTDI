@extends('layout')

@section('title','Upload Student Excel')

@section('content')


<br/><br/><br/><br/>
<!--<div class = "d-flex justify-content-center text-dark" style="width:200px;">
  <div class="card">
    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div>
                                    <p><input type="file" name="filUpload" class="custom-file-input" id="customFile1"></p>
                                    <p><label class="custom-file-label" for="customFile1">Choose file</label></p>

                                </div>
                            </div>
                            <input type="submit" placeholder="SUBMIT" />
            </form>
     </div>
</div>-->

<div class="mt-5">
                <!--Form to upload general information about students
                <div class="d-flex justify-content-center text-dark mb-0"><h3>Upload Student Information</h3></div>

                <div class="d-flex justify-content-center mt-5 mb-5 text-dark">
                
                    <div class="card" style="width: 30rem;">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="text-dark">
                            @csrf
                            <div>
                                <div>
                                    <p><input type="file" name="file" class="custom-file-input" id="customFile"><b class="showUploads"></b></p>
                                    <p><label class="custom-file-label" for="customFile">Choose file</label></p>
                                </div>
                            </div>
                            <input type="submit" placeholder="SUBMIT" />
                        </form>

                    
                    </div>
                </div> -->

                <!-- Form to upload academic performance-->
                <div class="d-flex justify-content-center text-dark mb-0"><h3>Upload Academic Performance</h3></div>

                <div class="d-flex justify-content-center mt-5 mb-5 text-dark">   
                    <div class="card" style="width: 30rem; color:#000;">
                    
                    <form action="{{ route('acad') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div>
                                    
                                    <p><input type="file" name="file1" class="custom-file-input" id="customFile"><b class="showUploads"></b></p>
                                    <p><label class="custom-file-label" for="customFile">Choose file</label></p>
                                </div>
                            </div>
                            <input type="submit" placeholder="SUBMIT" />
                        </form>

                    
                    </div>
                </div>

                <!--Form to upload academic performance 
                <div class="d-flex justify-content-center text-dark mb-0"><h3>Upload Attendance for students</h3></div>

                <div class="d-flex justify-content-center mt-5 mb-5 text-dark">   
                    <div class="card" style="width: 30rem; color:#000;">
                    
                    <form action="{{ route('attend') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div>
                                    
                                    <p><input type="file" name="file2" class="custom-file-input" id="customFile"></p>
                                    <p><label class="custom-file-label" for="customFile">Choose file</label></p>
                                </div>
                            </div>
                            <input type="submit" placeholder="SUBMIT" />
                        </form>

                    
                    </div>
                </div>

                Form to upload registration list
                <div class="d-flex justify-content-center text-dark mb-0"><h3>Upload registration list for students</h3></div>

                <div class="d-flex justify-content-center mt-5 mb-5 text-dark">   
                    <div class="card" style="width: 30rem; color:#000;">
                    
                    <form action="{{ route('regist') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div>
                                    
                                    <p><input type="file" name="file3" class="custom-file-input" id="customFile"></p>
                                    <p><label class="custom-file-label" for="customFile">Choose file</label></p>
                                </div>
                            </div>
                            <input type="submit" placeholder="SUBMIT" />
                        </form>

                    
                    </div>
                </div>


                 Form to upload student performance list
                <div class="d-flex justify-content-center text-dark mb-0"><h3>Upload Student performance list for students</h3></div>

                <div class="d-flex justify-content-center mt-5 mb-5 text-dark">   
                    <div class="card" style="width: 30rem; color:#000;">
                    
                    <form action="{{ route('stud') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div>
                                    
                                    <p><input type="file" name="file4" class="custom-file-input" id="customFile"></p>
                                    <p><label class="custom-file-label" for="customFile">Choose file</label></p>
                                </div>
                            </div>
                            <input type="submit" placeholder="SUBMIT" />
                        </form>
                    
                    </div>
                </div>-->

</div>


@endsection