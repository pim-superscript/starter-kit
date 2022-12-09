<?php

namespace Starter\Kit\Tests\Features;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class NewTradeContext implements Context
{
    /**
     * @Given /^a product$/
     */
    public function aProduct()
    {
        throw new PendingException();
    }

    /**
     * @When /^I add a new trade$/
     */
    public function iAddANewTrade()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I expect an error$/
     */
    public function iExpectAnError()
    {
        throw new PendingException();
    }
}