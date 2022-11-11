<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class ImportStudent implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            "fname" => $row["fname"], 
            "lname" => $row["lname"],
            "email" => $row["email"],  
            "studentID" => $row["studentid"]
        ]);
    }

    public function rules(): array
    {
        return [
            "fname" => ['required','string'],
            "lname" => ['required','string'],
            "email" => ['required','string'],
            "studentid" => ['required','string']
        ];
    }
}
