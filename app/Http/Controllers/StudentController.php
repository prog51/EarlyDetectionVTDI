<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Imports\ImportStudent;
use App\Imports\ImportAcadPerform;
use App\Imports\ImportAttend;
use App\Imports\ImportRegist;
use App\Imports\ImportStudPerform;
use App\Imports\ImportAcademic;


//use App\Exports\ExportUser;
use App\User;
use App\Academic;
use App\Attendant;
use App\Performance;
use App\Registration;
use App\Student;

class StudentController extends Controller
{

    private $AllRecord;

    public function __construct()
    {
        $AllRecord = student::all();
    }

    public function importView(Request $request)
    {
        return view('auth.uploadStudent');
    }

    public function importViewAcad(Request $request)
    {

        return view('auth.uploadStudent');
    }

    public function import(Request $request)
    {
        Excel::import(new ImportStudent, $request->file('file1')->store('files'));
        return redirect()->back()->with('success','Item created successfully!');;
    }

    public function importAcademic(Request $request)
    {
            
        Excel::import(new ImportAcademic, $request->file('acad')->store('files'));
        $AllRecords = student::all();

       //$students = $this->AllRecord;


       // var_dump($AllRecords);
        
       // $result = count($AllRecords);

        foreach( $AllRecords AS  $student)  //U[date Academic
        {
            Academic::where("studentID", $student->studentID)->update(array("student_id" => $student->id));          
        }
        return redirect()->back()->with('success','Item created successfully!');
    }
        

    public function importAttend(Request $request)
    {
        Excel::import(new ImportAttend, $request->file('file2')->store('files'));
        $AllRecords = student::all();

        foreach($AllRecords AS  $student)  //U[date Academic
        {
            Attendant::where("studentid", $student->studentID)->update(array("student_id" => $student->id));          
        }

        return redirect()->back()->with('success','Item created successfully!');;
    }

    public function importRegist(Request $request)
    {
        Excel::import(new ImportRegist, $request->file('file3')->store('files'));
        
        $AllRecords = student::all();

        foreach($AllRecords AS  $student)  //U[date Academic
        {
            Registration::where("studentid", $student->studentID)->update(array("student_id" => $student->id));          
        }
        
        return redirect()->back()->with('success','Item created successfully!');;
    }

    public function importStud(Request $request)
    {
        Excel::import(new ImportStudPerform, $request->file('file4')->store('files'));
        
        $AllRecords = student::all();

        foreach($AllRecords AS  $student)  //U[date Academic
        {
            Performance::where("studentid", $student->studentID)->update(array("student_id" => $student->id));          
        }
        
        return redirect()->back()->with('success','Item created successfully!');;
    }

    //show student for at risk student

    public function report(Request $request)
    {

       // $studentData = Student::where('id',$request->id);
        return view('auth.report');
    }

    
    
}
