<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';


    protected $fillable = [
        'doctor',
        'name',
        'age',
        'address',
        'contact',
        'reason',
        'date',
       
    ];
}
