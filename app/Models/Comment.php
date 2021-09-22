<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Comment extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'First Name',
        'Last Name',
        'Comment',
        'Stars',
        'Book_ID'
    ];


    /**
     * Sets the relationship for one to many book model
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}