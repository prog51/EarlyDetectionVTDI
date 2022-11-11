<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicPerformance extends Model
{
    protected $fillable = [
        'studentID', 'coursePass'
    ];
}
