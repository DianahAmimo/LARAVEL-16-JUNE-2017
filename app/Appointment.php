<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['username', 'style', 'saloonist', 'date'];

    protected $table = 'appointments';
}
