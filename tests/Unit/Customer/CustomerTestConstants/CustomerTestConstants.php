<?php

namespace Tests\Unit\Customer\CustomerTestConstants;

class CustomerTestConstants
{
    const CUSTOMER_EXAMPLE = [
        'First Name' => 'Thomas',
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

    const UPDATED_CUSTOMER_EXAMPLE = [
        'First Name' => 'Thomas',
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

    const WRONG_CUSTOMER_EXAMPLE = [
        'First Name' => 4,
        'Last Name' => 7,
        'Address Line 1' => 89977777,
        'Address Line 2' => 44423232,
        'State' => 'AL',
        'Zipcode' => 35757,
        'Phone Number' => '256.679.6197',
        'Email' => 'Thomas.Bockhorn@tecktonet.com',
        'Status' => 1,
        'Past Due' => 0
    ];
}