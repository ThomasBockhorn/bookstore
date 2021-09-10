<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'First Name',
        'Last Name',
        'Address Line 1',
        'Address Line 2',
        'State',
        'Zipcode',
        'Phone Number',
        'Email',
        'Status',
        'Past Due'
    ];
}