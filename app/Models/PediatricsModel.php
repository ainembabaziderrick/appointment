<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PediatricsModel extends Model
{
    use HasFactory;

    protected $table = 'pediatrics';


    protected $fillable = [
        'name',
        'contact',
        'email',
        'address',
        'patient_name',
        'patient_contact',
        'message',
    ];

}
