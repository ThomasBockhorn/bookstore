<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Title',
        'Author First Name',
        'Author Last Name',
        'Category',
        'Description',
        'Price',
        'On Sale',
        'Sale Price',
        'Image'
    ];
}