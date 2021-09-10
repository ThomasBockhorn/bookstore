<?php

namespace Tests\Unit\Book\InputSanitizerConstants;

class InputSanitizerExamples
{
    const UNSANITIZED_BOOK_EXAMPLE = [
        'id' => 1,
        'Title' => 'sample title',
        'Author First Name' => 'Thomas',
        'Author Last Name' => 'Bockhorn',
        'Category' => 'Fiction',
        'Description' => '<script> console.log("Hello World"); </script>',
        'Price' => 12.58,
        'On Sale' => 1,
        'Sale Price' => 10.99,
        'Image' => '/img/sample_file.jpg'
    ];
}