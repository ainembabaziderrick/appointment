<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DermatologyModel extends Model
{
    use HasFactory;

    protected $table = 'dermatology';


    protected $fillable = [
        'name',
        'contact',
        'email',
        'address',
        
    ];

}
