<?php

namespace Tests\Unit\Customer;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Customer\CustomerTestConstants\InputSanitizerConstants\InputSanitizerConstants;

class CustomerSanitizerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test to see if the info is sanitizered before validated
     * 
     * @return void
     */
    public function test_to_see_if_info_is_sanitized_before_validated()
    {

        $this->post('/customer', InputSanitizerConstants::UNSANITIZED_CUSTOMER_EXAMPLE);

        $this->assertDatabaseMissing('customers', InputSanitizerConstants::UNSANITIZED_CUSTOMER_EXAMPLE);
    }
}