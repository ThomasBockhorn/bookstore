<?php

namespace Tests\Unit\Book;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Book\BookTestConstants\BookTestConstants;


class BookValidationTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Test to see if a user can add the wrong data
     * 
     * @return void
     */

    public function test_to_see_if_user_can_add_wrong_info()
    {

        $response = $this->post('/book', BookTestConstants::BOOK_WRONG_INFO_EXAMPLE);

        $this->assertDatabaseMissing('books', BookTestConstants::BOOK_WRONG_INFO_EXAMPLE);
    }
}