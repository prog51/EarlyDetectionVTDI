<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $student =  new Student([
            
            "fname" =>row['fname'], 
            "lname" =>row['lname'],
            "email" =>row['email'],  
            "studentID" =>row['studentID'], 
        ]);

        //Delete any role if exist
        //DB::table('model_has_roles')->where('model_id',$student->id)->delete();

       // $student->assignRole($user->rol);

       return $student;
    }
}
