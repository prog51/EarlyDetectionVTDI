<?php

namespace App\Imports;

use App\AcademicPerformance;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportAcadPerform implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AcademicPerformance([
            
                "studentID" => $row[0], 
                "coursePass" => $row[1]
        ]);
    }
}
