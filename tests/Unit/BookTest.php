<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Book;


class BookTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_to_see_if_user_can_add_a_book()
    {
        //random book data
        $book = [
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

        $this->post('/book', $book);

        $this->assertDatabaseCount('books', 1);

        $this->assertDatabaseHas('books', $book);
    }

    /**
     * Test to see if a user can delete a product
     * 
     * @return void
     */
    public function test_to_see_if_a_user_can_delete_a_product()
    {
        $book = [
            'id' => 1,
            'Title' => 'sample title',
            'Author First Name' => 'Thomas',
            'Author Last Name' => 'Bockhorn',
            'Category' => 'Fiction',
            'Description' => 'Lorem Ipsem Lorem Ipsem',
            'Price' => 12.58,
            'On Sale' => 1,
            'Sale Price' => 10.99,
            'book_sale_start_date' => date('Y.m.d'),
            'book_sale_end_date' => date('Y.m.d'),
            'Image' => '/img/sample_file.jpg'
        ];

        $this->post('/book', $book);

        $this->delete('/book/1', $book);

        //check if its in there
        $this->assertDatabaseCount('books', 0);

        $this->assertDatabaseMissing('books', $book);
    }
}