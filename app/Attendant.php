<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    protected $fillable = [

        'studentid', 'attendance', 'courseid'
    ];
}
