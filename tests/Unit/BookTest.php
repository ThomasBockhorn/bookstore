<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BookTest extends TestCase
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

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_to_see_if_user_can_add_a_book()
    {

        $this->post('/book', $this->book);

        $this->assertDatabaseHas('books', $this->book);
    }

    /**
     * Test to see if a user can delete a book
     * 
     * @return void
     */
    public function test_to_see_if_a_user_can_delete_a_book()
    {

        $this->post('/book', $this->book);

        $this->delete('/book/1', $this->book);

        //check if its missing
        $this->assertDatabaseMissing('books', $this->book);
    }

    /**
     * Test to see if a user can update a book
     * 
     * @return void
     */
    public function test_to_see_if_a_user_can_edit_a_book()
    {
        $this->post('/book', $this->book);

        $this->put('/book/1', $this->book_updated);

        $this->assertDatabaseHas('books', $this->book_updated);
    }
}