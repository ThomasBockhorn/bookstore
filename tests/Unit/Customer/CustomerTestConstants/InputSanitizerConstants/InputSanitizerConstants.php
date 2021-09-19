<?php

namespace Tests\Unit\Customer\CustomerTestConstants\InputSanitizerConstants;

class InputSanitizerConstants
{
    const UNSANITIZED_CUSTOMER_EXAMPLE = [
        'First Name' => '<script> console.log("Hello World"); </script>',
        'Last Name' => 'Bockhorn',
        'Address Line 1' => '113 Sweet Hollow Way NW',
        'Address Line 2' => 'Suite 103',
        'State' => 'AL',
        'Zipcode' => '35757',
        'Phone Number' => '256.679.6197',
        'Email' => 'Thomas.Bockhorn@tecktonet.com',
        'Status' => 1,
        'Past Due' => 0
    ];
}