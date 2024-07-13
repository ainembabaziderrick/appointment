<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OncologyModel extends Model
{
    use HasFactory;

    protected $table = 'oncology';


    protected $fillable = [
        'name',
        'contact',
        'email',
        'address',
        
    ];

}
