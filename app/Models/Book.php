<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

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
        'book_sale_start_date',
        'book_sale_end_date',
        'Image'
    ];

    /**
     * Sets up the one to many relationship with comment
     */
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}