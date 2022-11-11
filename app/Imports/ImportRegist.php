<?php

namespace App\Imports;

use App\Registration;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class ImportRegist implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Registration([
            "studentID" => $row["studentid"], 
            "register" => $row["register"]
        ]);
    }

    public function rules() : array
        {
            return [
                "studentid" => ['required', 'string'],
                "register" => ['required','string']
            ];
        }
}


