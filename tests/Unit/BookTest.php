<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     * This will setup the initial post of data after each test
     * 
     */
    protected function setUp(): void
    {
        //initializes setup
        parent::setUp();

        //Posts book data for each test
        $this->post('/book', $this->book);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_to_see_if_user_can_add_a_book()
    {

        $this->assertDatabaseHas('books', $this->book);
    }

    /**
     * Test to see if a user can delete a book
     * 
     * @return void
     */
    public function test_to_see_if_a_user_can_delete_a_book()
    {

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

        //Updates the book
        $this->put('/book/1', $this->book_updated);

        $this->assertDatabaseHas('books', $this->book_updated);
    }

    /**
     * Test to see if books can be viewed by the user
     * 
     * @return void
     */
    public function test_to_see_if_user_can_see_collection_of_books()
    {

        $response = $this->get('book/');

        $response->assertSeeText('Author First Name');
    }

    /**
     * Test to see if a user can see a single record
     * 
     * @return void
     */
    public function test_to_see_if_user_can_see_a_single_book_record()
    {

        $response = $this->get('book/1');

        $response->assertSeeText('Author First Name');
    }

    /**
     * Test to see if a user can see the edit form
     * 
     * @return void
     */
    public function test_to_see_if_user_can_see_the_edit_form()
    {

        $response = $this->get('book/1/edit');

        $response->assertSeeText('Edit');
        $response->assertSeeText('Author First Name');
    }
}