<?php

namespace Tests\Unit\Book;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Book\BookTestConstants\BookTestConstants;

class BookTest extends TestCase
{
    use DatabaseMigrations;

    /** 
     * This will setup the initial post of data after each test
     * 
     */
    protected function setUp(): void
    {
        //initializes setup
        parent::setUp();

        //Posts book data for each test
        $this->post('/book', BookTestConstants::BOOK_EXAMPLE);
    }

    /**
     * Test to see if a user can add a book
     *
     * @return void
     */
    public function test_to_see_if_user_can_add_a_book()
    {
        $this->assertDatabaseHas('books', BookTestConstants::BOOK_EXAMPLE);
    }

    /**
     * Test to see if a user can delete a book
     * 
     * @return void
     */
    public function test_to_see_if_a_user_can_delete_a_book()
    {
        $this->delete('/book/1', BookTestConstants::BOOK_EXAMPLE);

        //check if its missing
        $this->assertDatabaseMissing('books', BookTestConstants::BOOK_EXAMPLE);
    }

    /**
     * Test to see if a user can update a book
     * 
     * @return void
     */
    public function test_to_see_if_a_user_can_edit_a_book()
    {
        //Updates the book
        $this->put('/book/1', BookTestConstants::BOOK_UPDATED_EXAMPLE);

        $this->assertDatabaseHas('books', BookTestConstants::BOOK_UPDATED_EXAMPLE);
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

    /**
     * Test to see if a user can see the add form
     * 
     * @return void
     */
    public function test_to_see_if_user_can_see_the_add_form()
    {
        $response = $this->get('book/create');

        $response->assertSeeText('Create');
    }
}