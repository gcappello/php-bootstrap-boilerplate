<?php

namespace GCappello\PhpBootstrapTests;

use GCappello\PhpBootstrap\Dummy;
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
    public function testGivenAGreetingRequestThenExpectedMessageReturned(): void
    {
        $this->assertEquals(Dummy::TEXT, Dummy::greet());
    }
}
