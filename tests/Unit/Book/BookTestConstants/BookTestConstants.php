<?php

namespace Tests\Unit\Book\BookTestConstants;

class BookTestConstants
{
    const BOOK_EXAMPLE = [
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

    const BOOK_UPDATED_EXAMPLE = [
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

    public function return_Book_Example()
    {
        return BookTestConstants::BOOK_EXAMPLE;
    }
}