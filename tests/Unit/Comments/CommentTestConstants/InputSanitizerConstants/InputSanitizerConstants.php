<?php

namespace Tests\Unit\Comments\CommentTestConstants\InputSanitizerConstants;

class InputSanitizerConstants
{
    const UNSANITIZED_COMMENT = [
        'First Name' => 'Thomas',
        'Last Name' => '<script> let x = 5; </script>',
        'Comment' => 'This is a sample comment',
        'Stars' => 5,
        'Book_ID' => 1
    ];
}