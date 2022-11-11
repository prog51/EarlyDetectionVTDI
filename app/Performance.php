<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable = [
        'studentID', 'assignmentAllPass', 'assignmentAllsubmit','courseid'
    ];


    public function students()
    {
        return $this->belongsTo(Student::class);

    }
}
