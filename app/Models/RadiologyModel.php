<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadiologyModel extends Model
{
    use HasFactory;

    protected $table = 'radiology';


    protected $fillable = [
        'name',
        'contact',
        'email',
        'address',
        
    ];

}
