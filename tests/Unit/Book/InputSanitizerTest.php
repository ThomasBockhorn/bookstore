<?php

namespace Tests\Unit\Book;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Book\InputSanitizerConstants\InputSanitizerExamples;

class InputSanitizerTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Test to see if input is sanitizes before its validated
     * 
     * @return void
     */
    public function test_to_see_if_book_data_is_sanitized_before_validated()
    {
        $this->post('/book', InputSanitizerExamples::UNSANITIZED_BOOK_EXAMPLE);

        $this->assertDatabaseMissing('books', InputSanitizerExamples::UNSANITIZED_BOOK_EXAMPLE);
    }
}