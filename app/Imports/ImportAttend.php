<?php

namespace App\Imports;

use App\Attendant;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;


class ImportAttend implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Attendant([
            "studentid" => $row["studentid"],
            "attendance" => $row["attend"],
            "courseid"  => $row["courseid"],
        ]);
    }

    public function rules(): array
    {
        return [
            "studentid" => ['required','string'],
            "attend" => ['required','string'],
            "courseid" => ['required','string'],
        ];
    }
}
