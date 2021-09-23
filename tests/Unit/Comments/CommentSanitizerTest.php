<?php

namespace Tests\Unit\Comments;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Book\BookTestConstants\BookTestConstants;
use Tests\Unit\Comments\CommentTestConstants\CommentTestConstants;
use Tests\Unit\Comments\CommentTestConstants\InputSanitizerConstants\InputSanitizerConstants;

class CommentSanitizerTest extends TestCase
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
     * Test to see if the Comments are sanitized before validated
     * 
     * @return void
     */
    public function test_to_see_if_comments_are_sanitized()
    {
        $this->put('/comment/1', InputSanitizerConstants::UNSANITIZED_COMMENT);

        $this->assertDatabaseMissing('comments', InputSanitizerConstants::UNSANITIZED_COMMENT);
    }
}