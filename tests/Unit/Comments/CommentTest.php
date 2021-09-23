<?php

namespace Tests\Unit\Comments;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Book\BookTestConstants\BookTestConstants;
use Tests\Unit\Comments\CommentTestConstants\CommentTestConstants;

class CommentTest extends TestCase
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
     * Test to see if a user can add a comment
     *
     * @return void
     */
    public function test_to_see_if_user_can_add_a_comment_to_a_product()
    {

        $this->assertDatabaseHas('comments', CommentTestConstants::SAMPLE_COMMENT);
    }

    /**
     * Test to see if a user can delete a comment
     * 
     * @return void
     */
    public function test_to_see_if_a_user_can_delete_a_comment()
    {
        $this->delete('/comment/1', CommentTestConstants::SAMPLE_COMMENT);

        $this->assertDatabaseMissing('comments', CommentTestConstants::SAMPLE_COMMENT);
    }

    /**
     * Test to see if a user can edit a comment
     * 
     * @return void
     */
    public function test_to_see_if_a_user_can_edit_a_comment()
    {
        $this->put('/comment/1', CommentTestConstants::EDITED_SAMPLE_COMMENT);

        $this->assertDatabaseHas('comments', CommentTestConstants::EDITED_SAMPLE_COMMENT);
    }
}