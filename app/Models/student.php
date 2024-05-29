<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;


    protected $fillable = [
        'fullname',
        'placeofbirth',
        'dateofbirth',
        'citizenship',
        'religion',
        'education',
        'work',
        'maritalstatus',
        'nik',
        'address',
        'datemail',
        'nomail',
        'earlyentry',
        'qrid',
        'gender'
    ];
}
