<?php

namespace App\Imports;

use App\Performance;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class ImportStudPerform implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Performance([
            "studentID" => $row["studentid"],
            "assignmentAllPass" => $row["assignment_all_pass"],
            "assignmentAllsubmit" => $row["assignment_all_submit"],
            "courseid" => $row["courseid"],
        ]);
    }

    public function rules(): array
    {
        return [
            "studentid" => ['required','string'],
            "assignment_all_pass" => ['required','string'],
            "assignment_all_submit" => ['required','string'],
            "courseid" => ['required','string'],
        ];
    }
}
