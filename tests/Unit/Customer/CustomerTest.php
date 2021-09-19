<?php

namespace Tests\Unit\Customer;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Unit\Customer\CustomerTestConstants\CustomerTestConstants;

class CustomerTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Initial setup for each test
     */
    protected function setUp(): void
    {
        //initializes setup
        parent::setUp();

        //post a test customer for each test
        $this->post('/customer', CustomerTestConstants::CUSTOMER_EXAMPLE);
    }


    /**
     * Test to see if a user can add a customer
     *
     * @return void
     */
    public function test_to_see_if_user_can_add_a_customer()
    {

        $this->assertDatabaseHas('customers', CustomerTestConstants::CUSTOMER_EXAMPLE);
    }

    /**
     * Test to see if a user can delete a customer
     * 
     * @return void
     */
    public function test_to_see_if_user_can_delete_a_customer()
    {

        $this->delete('/customer/1', CustomerTestConstants::CUSTOMER_EXAMPLE);

        $this->assertDatabaseMissing('customers', CustomerTestConstants::CUSTOMER_EXAMPLE);
    }

    /**
     * Test to see if a user can edit a customer
     * 
     * @return void
     */
    public function test_to_see_if_user_can_edit_a_customer()
    {

        $this->put('/customer/1', CustomerTestConstants::UPDATED_CUSTOMER_EXAMPLE);

        $this->assertDatabaseHas('customers', CustomerTestConstants::UPDATED_CUSTOMER_EXAMPLE);
    }

    /**
     * Test to see if a user can see a collection of customers
     * 
     * @return void
     */
    public function test_to_see_if_user_can_see_collection_of_customers()
    {

        $response = $this->get('/customer');

        $response->assertSeeText('First Name');
    }

    /**
     * Test to see if a user can see an individual customer
     * 
     * @return void
     */
    public function test_to_see_if_user_can_see_an_individual_customer()
    {

        $response = $this->get('/customer/1');

        $response->assertSeeText('First Name');
    }

    /**
     * Test to see if a user can see the edit form
     * 
     * @return void
     */
    public function test_to_see_if_user_can_see_the_edit_form()
    {

        $response = $this->get('/customer/1/edit');

        $response->assertSeeText('First Name');
    }

    /**
     * Test to see if a user can see the add form
     * 
     * @return void
     */
    public function test_to_see_if_user_can_see_the_add_customer_form()
    {

        $response = $this->get('/customer/create');

        $response->assertSeeText('Create');
    }
}