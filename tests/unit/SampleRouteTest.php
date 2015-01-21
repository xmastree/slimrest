<?php
use app\routes\SampleRoute;
class SampleRouteTest extends PHPUnit_Framework_TestCase {
    public function testCallback() {
        $handler = SampleRoute::handler();
        $this->assertInternalType('callable', $handler);

        $handler('Roman');
        $this->expectOutputString('Hello, Roman');
    }
}