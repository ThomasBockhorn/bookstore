<?php

namespace Tests\Unit\Comments;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Book\BookTestConstants\BookTestConstants;
use App\Models\Book;

class CommentTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test to see if a user can add a comment
     *
     * @return void
     */
    public function test_to_see_if_user_can_add_a_comment_to_a_product()
    {
        $sample_comment = [
            'First Name' => 'Thomas',
            'Last Name' => 'Bockhorn',
            'Comment' => 'This is a sample comment',
            'Stars' => 5,
            'Book_ID' => 1
        ];

        $this->post('/book', BookTestConstants::BOOK_EXAMPLE);

        $this->post('/comment', $sample_comment);

        $this->assertDatabaseHas('comments', $sample_comment);
    }
}