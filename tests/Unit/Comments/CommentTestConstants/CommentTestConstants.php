<?php

namespace Tests\Unit\Comments\CommentTestConstants;

class CommentTestConstants
{
    const SAMPLE_COMMENT = [
        'First Name' => 'Thomas',
        'Last Name' => 'Bockhorn',
        'Comment' => 'This is a sample comment',
        'Stars' => 5,
        'Book_ID' => 1
    ];

    const EDITED_SAMPLE_COMMENT = [
        'First Name' => 'John',
        'Last Name' => 'Bockhorn',
        'Comment' => 'This is an edited sample comment',
        'Stars' => 4,
        'Book_ID' => 1
    ];

    const UNVALIDATED_SAMPLE_COMMENT = [
        'First Name' => 'Thomas',
        'Last Name' => 1,
        'Comment' => 5,
        'Stars' => '5',
        'Book_ID' => 1
    ];
}