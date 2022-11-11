<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'fname', 'lname', 'email', 'studentID'
    ];

    public function performances()
    {
        return $this->hasMany(Performance::class);

    }

}
