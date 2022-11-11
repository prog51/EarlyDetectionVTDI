<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Academic;
use App\Attendant;
use App\Performance;
use App\Registration;


class listingController extends Controller
{
    //

  public function getStudents()
  {
    $listing =  Student::paginate(5);

    return view('/showStudent', ['listing' => $listing]);
  } 

  public function reportAll()
    {

        //$studentTableData = Performance::all();         
             
         $studentArr = Student::Select('students.*','performances.*')->join('performances', 'students.id', '=' , 'performances.student_id')
         ->where('assignmentAllPass','=','no')->orWhere('assignmentAllsubmit','=','no')->orderBy('students.id')->paginate(5);

    // $count = !empty(($studentAlert)) ? "HAS VALUES" : "NO VALUES";





  /*  


  */

     return view("auth.alertStudentListing", ['alertStudent' => $studentArr]);         
    }

}


