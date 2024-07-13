<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsychiatryModel extends Model
{
    use HasFactory;

    protected $table = 'psychiatry';


    protected $fillable = [
        'name',
        'contact',
        'email',
        'address',
        
    ];

}
