<?php

namespace Tests\Unit\Comments;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Book\BookTestConstants\BookTestConstants;
use Tests\Unit\Comments\CommentTestConstants\CommentTestConstants;

class CommentValidationTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Initial setup for each test
     */
    protected function setUp(): void
    {
        //initializes setup
        parent::setUp();

        //Creates an book instance
        $this->post('/book', BookTestConstants::BOOK_EXAMPLE);

        //post a test customer for each test
        $this->post('/comment', CommentTestConstants::SAMPLE_COMMENT);
    }

    /**
     * Test to see if data is validated before entered into database
     * 
     * @return void
     */
    public function test_to_see_if_a_data_is_validated()
    {
        $this->put('/comment/1', CommentTestConstants::UNVALIDATED_SAMPLE_COMMENT);

        $this->assertDatabaseMissing('comments', CommentTestConstants::UNVALIDATED_SAMPLE_COMMENT);
    }
}