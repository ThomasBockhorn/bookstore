<?php

namespace Tests\Unit\Book;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class BookValidationTest extends TestCase
{

    use DatabaseMigrations;

    protected $book = [
        'id' => 1,
        'Title' => 'sample title',
        'Author First Name' => 'Thomas',
        'Author Last Name' => 'Bockhorn',
        'Category' => 'Fiction',
        'Description' => 'Lorem Ipsem Lorem Ipsem',
        'Price' => 12.58,
        'On Sale' => 1,
        'Sale Price' => 10.99,
        'Image' => '/img/sample_file.jpg'
    ];

    protected $book_updated = [
        'id' => 1,
        'Title' => 'sample title',
        'Author First Name' => 'Bob',
        'Author Last Name' => 'Bockhorn',
        'Category' => 'Fiction',
        'Description' => 'Lorem Ipsem Lorem Ipsem',
        'Price' => 12.58,
        'On Sale' => 1,
        'Sale Price' => 10.99,
        'Image' => '/img/sample_file.jpg'
    ];
}