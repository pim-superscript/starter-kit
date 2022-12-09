<?php

namespace Starter\Kit\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Starter\Kit\NewFeature;

class NewFeatureTest extends TestCase
{
    /** @test */
    public function can_be_add_some_numbers(): void
    {
        $this->assertEquals(4, (new NewFeature())->add(2, 2));
    }
}