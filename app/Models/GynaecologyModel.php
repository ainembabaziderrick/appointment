<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GynaecologyModel extends Model
{
    use HasFactory;

    protected $table = 'gynaecology';


    protected $fillable = [
        'name',
        'contact',
        'email',
        'address',
        
    ];

}
