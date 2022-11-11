<?php

namespace App\Imports;

use App\Academic;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;


class ImportAcademic implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    //use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {

        //dd($row);
        //exit();

        return new Academic([            
            'studentID' => $row["studentid"], 
            'coursePass' => $row["coursepass"],
            //'at'    => $row['at_field'],
          ]);
    }

   /*public function headingRow(): int
    {
        return 2;
    }*/

    public function rules(): array
    {
        return [
            "studentid" => ['required','string'],
            "coursepass" => ['required','string'],
        ];
    }
}
