<?php

namespace Tests\Unit\Customer;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Customer\CustomerTestConstants\CustomerTestConstants;


class CustomerValidationTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test to see if user can add the wrong info into customer model
     * 
     * @return void
     */
    public function test_to_see_if_users_can_add_wrong_info_into_customer_table()
    {
        $this->post('/customer', CustomerTestConstants::WRONG_CUSTOMER_EXAMPLE);

        $this->assertDatabaseMissing('customers', CustomerTestConstants::WRONG_CUSTOMER_EXAMPLE);
    }
}