<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;
    protected  $fillable = ['division', 'district', 'upazila', 'fname', 'lname','fullname', 'gender', 'bdate', 'father', 'fnationality', 'fnid', 'mother', 'mnationality', 'mnid', 'presaddress', 'peraddress'];

}
