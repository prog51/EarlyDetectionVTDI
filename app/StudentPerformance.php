<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPerformance extends Model
{
    protected $fillable = [

        'studentID', 'assignmentAllPass', 'assignmentAllsubmit'
    ];
}
