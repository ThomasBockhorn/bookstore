<?php

namespace Tests\Unit\Customer;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Customer\CustomerTestConstants\CustomerTestConstants;

class CustomerTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Test to see if a user can add a customer
     *
     * @return void
     */
    public function test_to_see_if_user_can_add_a_customer()
    {
        $this->post('/customer', CustomerTestConstants::CUSTOMER_EXAMPLE);

        $this->assertDatabaseHas('customers', CustomerTestConstants::CUSTOMER_EXAMPLE);
    }

    /**
     * Test to see if a user can delete a customer
     * 
     * @return void
     */
    public function test_to_see_if_user_can_delete_a_customer()
    {
        $this->post('/customer', CustomerTestConstants::CUSTOMER_EXAMPLE);

        $this->delete('/customer/1', CustomerTestConstants::CUSTOMER_EXAMPLE);

        $this->assertDatabaseMissing('customers', CustomerTestConstants::CUSTOMER_EXAMPLE);
    }
}